<?php

$view = $_GET['aksi'];
echo "<title>" . $view . "  Data Peserta Didik</title>";
// memanggil file header dan menu
include "_header.php";
include "_menu.php";
include "../koneksi.php";

$quer = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
$tahun_ajaran = $quer->fetch_assoc();
?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DATA PESERTA DIDIK TAHUN AJARAN <?= $tahun_ajaran['tahunAjaran'] ?>
        </h1>
    </section>

    <?php if ($view == 'list' or $view == NULL) { ?>
        <section class="content">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab" aria-expanded="true">Menunggu Persetujuan</a></li>
                    <li class=""><a href="#glyphicons" data-toggle="tab" aria-expanded="false">Peserta Tidak Lulus</a></li>
                    <li class=""><a href="#ds" data-toggle="tab" aria-expanded="false">Peserta Lulus</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="fa-icons">
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
                                    $tahun_ajaran_aktif = $tahun_ajaran['id_thnajaran'];
                                    // echo $$tahun_ajaran_aktif;
                                    $sql = $koneksi->query("select * from tbl_peserta where id_thnajaran = '$tahun_ajaran_aktif' and status='Proses seleksi'");
                                    while ($data = $sql->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['jenis_kelamin'] ?></td>
                                            <td><?= $data['nik'] ?></td>
                                            <td><?= $data['alamat'] ?></td>
                                            <td><?= $data['asal_sekolah'] ?></td>
                                            <td><?= $data['status'] ?></i></td>
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
                    <div class="tab-pane" id="glyphicons">
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
                                $tahun_ajaran_aktif = $tahun_ajaran['id_thnajaran'];
                                // echo $$tahun_ajaran_aktif;
                                $sql = $koneksi->query("select * from tbl_peserta where id_thnajaran = '$tahun_ajaran_aktif' and status='Tidak Lulus'");
                                while ($data = $sql->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jenis_kelamin'] ?></td>
                                        <td><?= $data['nik'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['asal_sekolah'] ?></td>
                                        <td><?= $data['status'] ?></td>
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
                    <div class="tab-pane" id="ds">
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
                                $tahun_ajaran_aktif = $tahun_ajaran['id_thnajaran'];
                                // echo $$tahun_ajaran_aktif;
                                $sql = $koneksi->query("select * from tbl_peserta where id_thnajaran = '$tahun_ajaran_aktif' and status='Lulus'");
                                while ($data = $sql->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jenis_kelamin'] ?></td>
                                        <td><?= $data['nik'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['asal_sekolah'] ?></td>
                                        <td><?= $data['status'] ?></i></td>
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
                <!-- /.tab-content -->
            </div>

        </section>

    <?php } else if ($view == 'hapus_peserta') { ?>
        <!-- # syntax delete data loker -->
        <?php
        $id = $_GET['id'];

        $sql    = "DELETE FROM tbl_peserta WHERE id_peserta = '$id'";

        if ($sql) {
            echo "<script>alert('Data peserta berhasil di hapus !')</script>";
        } else {
            echo "<script>alert('Data peserta gagal di hapus !')</script>";
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
                    $sql = $koneksi->query("SELECT * FROM tbl_peserta WHERE id_peserta='$id'");
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
                                            <td>: <?= $data['thn_lahir_ayah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pekerjaan Ayah</span> </td>
                                            <td>: <?= $data['pekerjaan_ayah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pendidikan Ayah</span> </td>
                                            <td>: <?= $data['pendidikan_ayah'] ?></td>
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
                                            <td>: <?= $data['thn_lahir_ibu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pekerjaan Ibu</span> </td>
                                            <td>: <?= $data['pekerjaan_ibu'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><span> Pendidikan Ibu</span> </td>
                                            <td>: <?= $data['pendidikan_ibu'] ?></td>
                                        </tr>

                                        <tr>

                                            <?php
                                            $status = $data['status'];

                                            if ($status == "Proses seleksi") {
                                                echo '  <td>
                                                <a href="data_pesertaDidik.php?aksi=acc&id=' . $data["id_peserta"] . '">
                                                    <button type="button" class="btn btn-success">
                                                        TERIMA PESRTA
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="data_pesertaDidik.php?aksi=tolak&id=$data["id_peserta"]">
                                                    <button type="button" class="btn btn-warning">
                                                        TOLAK PESERTA
                                                    </button>
                                                </a>
                                            </td>';
                                            }
                                            ?>


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

                    $status = 'Lulus';

                    $query_udapte = $koneksi->query("UPDATE tbl_peserta SET status='$status' WHERE id_peserta = '$id'");
                    if ($query_udapte) {
                        echo "<script>alert('Data peserta berhasil diterima !')</script>";
                    } else {
                        echo "<script>alert('Data peserta gagal ditolak !')</script>";
                    }
                    echo "<script>location='data_pesertaDidik.php?aksi=list'</script>";
                    ?>
                    <!-- # Syntax udapte data loker -->

                <?php } else if ($view == 'tolak') { ?>
                    <!-- # syntax udapte data loker -->
                    <?php
                    $id = $_GET['id'];
                    $query_udapte = $koneksi->query("UPDATE tbl_peserta SET status='Tidak Lulus' WHERE id_peserta = '$id' ");
                    if ($query_udapte) {
                        echo "<script>alert('Data peserta berhasil ditolak !')</script>";
                    } else {
                        echo "<script>alert('Data peserta gagal ditolak !')</script>";
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