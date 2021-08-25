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
            LAPORAN PESERTA DIDIK
        </h1>
    </section>

    <?php if ($view == 'list' or $view == NULL) { ?>
        <section class="content">

            <div class="card" style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Laporan Data Peserta</h3>
                     <a href="cetak_laporan.php">
                        <button type="button" class="btn btn-primary">
                            Cetak Laporan
                        </button>
                    </a>
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
                                    <th>No Telpon</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $sql = $koneksi->query("select * from tbl_peserta Where status_pendaftaran='diterima'");
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
            </div>
        </section>

    
    <?php } ?>
</div>



<?php
// memanggil file footer
include "_footer.php";
?>