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
                    <h3>Tabel Data Tahun Ajaran</h3>
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
                                            <a href="tahun_ajaran.php?aksi=hapus&id=<?= $data['id_thnajaran'] ?>">
                                                <span></span>
                                                <i class="material-icons">delete_forever</i>
                                            </a>

                                            <a href="tahun_ajaran.php?aksi=on&id=<?= $data['id_thnajaran'] ?>">
                                                <i class="material-icons">visibility</i>
                                            </a>

                                            <a href="tahun_ajaran.php?aksi=off&id=<?= $data['id_thnajaran'] ?>">
                                                <i class="material-icons">visibility_off</i>
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
        $query_udapte = $koneksi->query("UPDATE tbl_tahunajaran SET status=' On' WHERE id_thnajaran = '$id' ");
        if ($query_udapte) {
            echo "<script>alert('data On !')</script>";
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
        $query_udapte = $koneksi->query("UPDATE tbl_tahunajaran SET status=' Off' WHERE id_thnajaran = '$id' ");
        if ($query_udapte) {
            echo "<script>alert('Data Off !')</script>";
        } else {
            echo "<script>alert('Data Off  !')</script>";
        }
        echo "<script>location='tahun_ajaran.php?aksi=list'</script>";
        ?>
        <!-- # syntax delete data loker -->


    <?php } ?>

</div>

<?php
// memanggil file footer
include "_footer.php";
?>