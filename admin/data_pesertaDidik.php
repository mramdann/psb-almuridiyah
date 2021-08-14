<?php

$view = $_GET['aksi'];
echo "<title>" . $view . "  Data Peserta Didik</title>";
// memanggil file header dan menu
include "_header.php";
include "_menu.php";
include "../koneksi.php";
?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DATA PESERTA DIDIK
        </h1>
    </section>

    <?php if ($view == 'list' or $view == NULL) { ?>
        <section class="content">

            <div class="card" style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Tabel Data Peserta</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr class="bg-primary">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Asala Sekolah</th>
                                    <th>Setatus Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $sql = $koneksi->query("select * from tbl_peserta");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jenis_kelamin'] ?></td>
                                        <td><?= $data['nik'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['asal_sekolah'] ?></td>
                                        <td><?= $data['status_pendaftaran'] ?> <i class="material-icons"><?= $data['icon'] ?></i></td>
                                        <td>
                                            <a href="data_pesertaDidik.php?aksi=hapus_peserta&id=<?= $data['id_peserta'] ?>">
                                                <span></span>
                                                <i class="material-icons">delete_forever</i>
                                            </a>

                                            <a href="data_pesertaDidik.php?aksi=detailPeserta&id=<?= $data['id_peserta'] ?>">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    <?php } else if ($view == 'hapus_peserta') { ?>
        <!-- # syntax delete data loker -->
        <?php
        $id = $_GET['id'];

        $sql    = "DELETE FROM tbl_peserta WHERE id_peserta = '$id'";
        $sql2   = "DELETE FROM tbl_ayah WHERE id_peserta = '$id'";
        $sql3   = "DELETE FROM tbl_ibu WHERE id_peserta= '$id'";

        $exe    = mysqli_query($koneksi, $sql);
        $exe2  = mysqli_query($koneksi, $sql2);
        $exe2  = mysqli_query($koneksi, $sql3);



        if ($sql) {
            echo "<script>alert('Data lamaran berhasil di hapus !')</script>";
        } else {
            echo "<script>alert('Data lamaran gagal di hapus !')</script>";
        }
        echo "<script>location='data_pesertaDidik.php?aksi=list'</script>";
        ?>



    <?php } else if ($view == 'detailPeserta') { ?>

        <section class="content">
            <div style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">
                <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Detail Data Peserta</h3>
                    <a href="data_pesertaDidik.php?aksi=list"> <button type="button" class="btn btn-primary">
                            Kembali
                        </button></a>
                </div>

                <div class="card mb-3" style="max-width: 980px;">

                    <?php
                    $id = $_GET['id'];
                    $sql = $koneksi->query("SELECT * FROM tbl_peserta a JOIN tbl_ayah b ON a.id_peserta = b.id_peserta JOIN tbl_ibu c ON a.id_peserta = c.id_peserta WHERE a.id_peserta='$id'");
                    while ($data = $sql->fetch_assoc()) {
                        # code...
                    ?>
                        <div class="row no-gutters" style="margin-bottom: 40px;">
                            <div class="col-md-6">
                                <img style="width: 470px;" src="../assets/img/peserta/<?= $data['foto'] ?>" class="card-img-top" alt="...">
                            </div>

                            <div class="col-md-6">
                                <div class="card-body">
                                    <table class="table table-hover dashboard-task-infos">
                                        <tr>
                                            <td><span> Nama</span> </td>
                                            <td>: <?= $data['nama'] ?></td>

                                        </tr>
                                        <tr>
                                            <td><span> Jenis Kelamin</span> </td>
                                            <td>: <?= $data['jenis_kelamin'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> NIK</span> </td>
                                            <td>: <?= $data['nik'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> No KK</span> </td>
                                            <td>: <?= $data['no_kk'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Tempat Lahir</span> </td>
                                            <td>: <?= $data['tempat_lahir'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Tanggal Lahir</span> </td>
                                            <td>: <?= $data['tgl_lahir'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Agama</span> </td>
                                            <td>: <?= $data['agama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Alamat</span> </td>
                                            <td>: <?= $data['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> No Hp</span> </td>
                                            <td>: <?= $data['no_hp'] ?></td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td> </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span> Asal Sekolah</span> </td>
                                            <td>: <?= $data['asal_sekolah'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><span> Jenis Pendaftaran</span> </td>
                                            <td>: <?= $data['jenis_pendaftaran'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Jenjang</span> </td>
                                            <td>: <?= $data['jenjang'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Jalur Pendaftaran</span> </td>
                                            <td>: <?= $data['jalur_pendaftaran'] ?></td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td> </td>
                                            <td>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span> Nama Ayah</span> </td>
                                            <td>: <?= $data['nama_ayah'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><span> Tahun Lahir Ayah</span> </td>
                                            <td>: <?= $data['thn_lahir_a'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pekerjaan Ayah</span> </td>
                                            <td>: <?= $data['pekerjaan_a'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pendidikan Ayah</span> </td>
                                            <td>: <?= $data['pendidikan_a'] ?></td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td> </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span> Nama Ibu</span> </td>
                                            <td>: <?= $data['nama_ibu'] ?></td>
                                        </tr>

                                        <tr>
                                            <td><span> Tahun Lahir Ibu</span> </td>
                                            <td>: <?= $data['thn_lahir_i'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pekerjaan Ibu</span> </td>
                                            <td>: <?= $data['pekerjaan_i'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pendidikan Ibu</span> </td>
                                            <td>: <?= $data['pendidikan_i'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="data_pesertaDidik.php?aksi=acc&id=<?= $id ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        TERIMA PESRTA
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="data_pesertaDidik.php?aksi=tolak&id=<?= $data['id_peserta'] ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        TOLAK PESERTA
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>

                <?php } else if ($view == 'acc') { ?>
                    <!-- # syntax udapte data loker -->
                    <?php
                    $id = $_GET['id'];
                    $query_udapte = $koneksi->query("UPDATE tbl_peserta SET status_pendaftaran=' Diterima', icon='done' color='text-success' WHERE id_peserta = '$id' ");
                    if ($query_udapte) {
                        echo "<script>alert('Data lamaran berhasil diterima !')</script>";
                    } else {
                        echo "<script>alert('Data lamaran gagal diterima !')</script>";
                    }
                    echo "<script>location='data_pesertaDidik.php?aksi=list'</script>";
                    ?>
                    <!-- # Syntax udapte data loker -->

                <?php } else if ($view == 'tolak') { ?>
                    <!-- # syntax udapte data loker -->
                    <?php
                    $id = $_GET['id'];
                    $query_udapte = $koneksi->query("UPDATE tbl_peserta SET status_pendaftaran='Ditolak', icon='close' color='text-danger' WHERE id_peserta = '$id' ");
                    if ($query_udapte) {
                        echo "<script>alert('Data lamaran berhasil ditolak !')</script>";
                    } else {
                        echo "<script>alert('Data lamaran gagal ditolak !')</script>";
                    }
                    echo "<script>location='data_pesertaDidik.php?aksi=list'</script>";
                    ?>
                </div>
            </div>
        </section>




    <?php } ?>
</div>












<?php
// memanggil file footer
include "_footer.php";
?>