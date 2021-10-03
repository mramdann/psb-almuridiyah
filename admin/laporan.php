<?php

echo "<title>Laporan Data Peserta Didik</title>";
// memanggil file header dan menu
include "_header.php";
include "_menu.php";
include "../koneksi.php";
?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            LAPORAN PESERTA DIDIK
        </h1>
    </section>
    <section class="content">
        <div class="card" style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">
            <div class="card-header mb-5" style="margin-bottom: 40px;">
                <h3>Laporan Data Peserta Didik</h3>

                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-10">
                            <select name="ta" id="" class="form-control" required>
                                <option value="">-- Pilih Tahun Ajaran --</option>
                                <?php $query = $koneksi->query("select * from tbl_tahunajaran");
                                while ($data = $query->fetch_assoc()) { ?>
                                    <option value="<?= $data['id_thnajaran'] ?>"><?= $data['tahunAjaran'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>

            <?php if (isset($_GET['ta'])) { ?>
                <div class="card-body">
                    <a href="cetak_laporan.php">
                        <button type="button" class="btn btn-primary mb-3">
                            Cetak Laporan
                        </button>
                    </a><br><br>

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
                                    <th>No Telpon</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $idta = $_GET['ta'];
                                $sql = $koneksi->query("select * from tbl_peserta Where id_thnajaran ='$idta' and status='Lulus'");
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
                                        <td><?= $data['no_hp'] ?> </i></td>

                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            <?php } ?>


        </div>
    </section>
</div>



<?php
// memanggil file footer
include "_footer.php";
?>