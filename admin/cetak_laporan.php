<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Laporan </title>
    <meta charset="utf-8">
</head>

<body>

    <center>
        <h3>Laporan Data Peserta Didik Tahun Ajaran </h3>
        <div class="table-responsive">
            <table class="table table-hover dashboard-task-infos" border="1">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Asala Sekolah</th>
                        <th>No Telpon</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $no = 1;
                    $sql = $koneksi->query("select * from tbl_peserta Where status='Lulus'");
                    while ($data = $sql->fetch_assoc()) {
                        # code...
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['nik'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['asal_sekolah'] ?></td>
                            <td><?= $data['no_hp'] ?> </i></td>

                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </center>
    <script>
        window.print()
    </script>
</body>

</html>