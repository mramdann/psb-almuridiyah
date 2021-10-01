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
            DATA TAHUN AJARAN
        </h1>
    </section>

    <?php if ($view == 'list' or $view == NULL) { ?>
        <section class="content">

            <div class="card" style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Tabel Data Tahun Ajaran</h3>
                    <a href="tahun_ajaran.php?aksi=tambah_tahunAjaran">
                        <button type="button" class="btn btn-primary">
                            Tambah Data Tahun Ajaran
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr class="bg-primary">
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $sql = $koneksi->query("select * from tbl_tahunajaran");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                    $id_thnajaran = $data['id_thnajaran'];
                                    $result = mysqli_query($koneksi, "SELECT * FROM tbl_peserta WHERE id_thnajaran='$id_thnajaran'");
                                    $jumlah_data = mysqli_num_rows($result);

                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['tahunAjaran'] ?> </td>
                                        <td><?= $jumlah_data ?></td>
                                        <td><?= $data['status'] ?></td>
                                        <td>
                                            <a href="tahun_ajaran.php?aksi=hapus&id=<?= $data['id_thnajaran'] ?>" title="Hapus">
                                                <span></span>
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            <a href="tahun_ajaran.php?aksi=on&id=<?= $data['id_thnajaran'] ?>" title="Aktifkan">
                                                <i class="fa fa-check-square-o text-success"></i>
                                            </a>

                                            <a href="tahun_ajaran.php?aksi=off&id=<?= $data['id_thnajaran'] ?>" title="Non Aktif">
                                                <i class="fa fa-power-off text-danger"></i>
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

    <?php } else if ($view == 'hapus') { ?>
        <!-- # syntax delete data loker -->
        <?php
        $id = $_GET['id'];

        $sql    = "DELETE FROM tbl_tahunajaran  WHERE id_thnajaran = '$id'";

        if ($sql) {
            echo "<script>alert('Data berhasil di hapus !')</script>";
        } else {
            echo "<script>alert('Data gagal di hapus !')</script>";
        }
        echo "<script>location='tahun_ajaran.php?aksi=list'</script>";
        ?>

    <?php } else if ($view == 'on') { ?>
        <!-- # syntax udapte data loker -->
        <?php
        $id = $_GET['id'];
        $query_udapte = $koneksi->query("UPDATE tbl_tahunajaran SET status='aktif' WHERE id_thnajaran = '$id' ");
        if ($query_udapte) {
            echo "<script>alert('Tahun ajaran diaktifkan !')</script>";
        } else {
            echo "<script>alert('Data lamaran gagal diterima !')</script>";
        }
        echo "<script>location='tahun_ajaran.php?aksi=list'</script>";
        ?>
        <!-- # Syntax udapte data loker -->

    <?php } else if ($view == 'off') { ?>
        <!-- # syntax udapte data loker -->
        <?php
        $id = $_GET['id'];
        $query_udapte = $koneksi->query("UPDATE tbl_tahunajaran SET status='tidakaktif' WHERE id_thnajaran = '$id' ");
        if ($query_udapte) {
            echo "<script>alert('Tahun Ajaran di Non Aktifkan !')</script>";
        } else {
            echo "<script>alert('Tahun Ajaran gagal di Non Aktifkan  !')</script>";
        }
        echo "<script>location='tahun_ajaran.php?aksi=list'</script>";
        ?>
        <!-- # syntax delete data loker -->



    <?php } else if ($view == 'tambah_tahunAjaran') {

        // Syntax untuk menyimpan data ke tbl_user jika tombol simpan ditekan
        if (isset($_POST['simpan'])) {
            $tAjaran = $_POST['tAjaran'];
            $status = 'konfirmasi';


            $query_simpan = $koneksi->query("INSERT INTO tbl_tahunajaran (tahunAjaran, status ) VALUES ('$tAjaran','$status')");

            if ($query_simpan) {
                echo "<script>alert('Data berhasil disimpan !')</script>";
                echo "<script>location='tahun_ajaran.php?aksi=list'</script>";
            } else {
                echo "<script>alert('Data gagal disimpan !')</script>";
                echo "<script>location='tahun_ajaran.php?aksi=tambah_tahunAjaran'</script>";
            }
        } ?>


        <section class="content">
            <div style="width:80%; height:500px; margin:auto; position:relative;">
                <div class="card" style=" width:650px; position:absolute; top:100px; left:50%; transform: translateX(-50%); border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                    <div class="card-header mb-5" style="margin-bottom: 40px;">
                        <h3>Form Tahun Ajaran</h3>
                        <a href="tahun_ajaran.php?aksi=list"> <button type="button" class="btn btn-primary">
                                Kembali
                            </button></a>
                    </div>

                    <div class="card-body">
                        <form method="POST">
                            <fieldset>

                                <div class="form-group">
                                    <label for="tAjaran">Tahun Ajaran </label>
                                    <input type="number" class="form-control" name="tAjaran" id="tAjaran" placeholder="Masukan Tahun Ajaran" required>
                                </div>

                            </fieldset>
                            <div class="form-actions text-center">
                                <button class="btn btn-primary" type="submit" name="simpan">Simpan</button></a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </section>


    <?php } ?>

</div>

<?php
// memanggil file footer
include "_footer.php";
?>