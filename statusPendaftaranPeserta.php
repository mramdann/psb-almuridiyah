<?php
$view = $_GET['aksi'];
echo "<title>" . $view . "  Data Peserta Didik</title>";
include "header.php";
include "koneksi.php";
?>


<div class="ml-auto">
    <div class="social-wrap">
        <a href="#"><span class="icon-facebook"></span></a>
        <a href="#"><span class="icon-twitter"></span></a>
        <a href="#"><span class="icon-linkedin"></span></a>
        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
    </div>
</div>

</header>


<?php
$no = 1;
$sql = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
while ($data = $sql->fetch_assoc()) {
?>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.bYKh1zv1gk.jpg)">
        <div class="container">
            <div class="row align-items-end"></div>
            <div class="col-lg-7">
                <h2 class="mb-0">pengumuman hasil seleksi penemerimaan siswa baru tahun ajaran <?= $data['tahunAjaran'] ?></h2>
            </div>
        </div>
    </div>
    </div>

<?php }
?>



<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="http://localhost/psb-almuridiyah/statusPendaftaranPeserta.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Pengumuman</span>
    </div>
</div>


<?php if ($view == 'list' or $view == NULL) { ?>



    <?php
    $sql = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
    $data = $sql->fetch_assoc();
    $status = $data['status'];

    if ($status == "aktif") {
        echo ' <div class="container pt-5 mb-5">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Pengumuman</span>
                </h2>
            </div>
            <div class="col-lg-4">
                <p>Selamat untuk adik-adik yang telah di nyatakan lulus seleksi, dan adik-adik yang tidak lulus seleksi, jangan bersedih.</p>
            </div>
            <div class="col-lg-4">
                <p>Jangan lupa untuk yang lulus seleksi pendaftaran agar melakukan pendaftaran ulang di kantor sekolah.</p>
            </div>
        </div>
    </div>
    <div class="container pt-5 mb-5">
    <div class="site-section">
        <div class="container">
            <div class="row  justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                  
                     <p><a href="statusPendaftaranPeserta.php?aksi=hasilseleksi" class="btn btn-primary px-4 rounded-0">Selanjutnya</a></p>
                </div>
            </div>
     </div>
    </div>
</div>';
    } else {
        echo '<div class="container pt-5 mb-5">
    <div class="site-section">
        <div class="container">
            <div class="row  justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                   <div class="alert alert-danger" role="alert">Belum ada pendaftaran yang dibuka!</div>
                     <p><a href="http://localhost/psb-almuridiyah/" class="btn btn-primary px-4 rounded-0">Kembali</a></p>
                </div>
            </div>
     </div>
    </div>
</div>';
    }

    ?>

<?php } else if ($view == 'hasilseleksi') { ?>

    <div class="container pt-5 mb-5">
        <div class="shadow p-3 mb-5 bg-white rounded">

            <div class="card-header mb-5">
                <nav class="navbar navbar-light bg-light">
                    <h3>Peserta Yang Lulus / Tidak Lulus</h3>

                </nav>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th>Asala Sekolah</th>
                                <th>Setatus Pendaftaran</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            $sql = $koneksi->query("select * from tbl_peserta order by id_peserta desc");

                            while ($data = $sql->fetch_assoc()) {
                            ?>

                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
                                    <td>
                                        <p><?= $data['status'] ?> </p>
                                    </td>
                                    <td>
                                        <a href="statusPendaftaranPeserta.php?aksi=detailPeserta&id=<?= $data['id_peserta'] ?>">
                                            <button type="button" class="btn btn-success">
                                                <i class="material-icons">visibility</i>
                                            </button>
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
    </div>

<?php } else if ($view == 'detailPeserta') { ?>

    <div class="container pt-5 mb-5" style="width: 800px;">


        <div class="shadow p-3 mb-5 bg-white rounded">

            <div class="mb-5 mt-2 text-center">
                <div class="site-logo">

                    <img style="width: 100x; height: 50px;" src="assets/front/images/logo.png" alt="Image" class="img-fluid">

                </div>
            </div>
            <div class="card mb-3">

                <div class="row no-gutters">
                    <?php
                    $id = $_GET['id'];
                    $sql = $koneksi->query("SELECT * FROM tbl_peserta where id_peserta='$id'");
                    while ($data = $sql->fetch_assoc()) {
                        # code...
                    ?>
                        <div class="col-md-6">
                            <img style="width: 300px;" src="assets/img/peserta/<?= $data['foto'] ?>" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title <?= $data['color'] ?>"><?= $data['status'] ?><i class="material-icons"><?= $data['icon'] ?></i></h5>

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
                                        <td></td>
                                        <td></td>
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
                                        <td></td>
                                        <td></td>
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
                                        <td></td>
                                        <td></td>
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

                                </table>
                            </div>
                        </div>

                </div>
            </div>

            <div class="mb-5 mt-2 text-center">
                <div class="site-logo">
                    <a href="statusPendaftaranPeserta.php?aksi=list">
                        <button type="button" class="btn btn-primary">
                            KEMBALI
                        </button>
                    </a>
                    <a href="print.php?id=<?= $data['id_peserta'] ?>" target="_blank">
                        <button type="button" class="btn btn-primary">
                            CETAK
                        </button>
                    </a>
                </div>
            </div>
        <?php
                    } ?>
        </div>
    </div>

<?php } ?>

<?php include "footer.php"; ?>