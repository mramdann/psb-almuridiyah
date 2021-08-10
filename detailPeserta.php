<?php include "header.php";
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
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.bYKh1zv1gk.jpg)">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Setatus Pendaftaran Peserta</h2>

            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Status Pendaftaran</span>
    </div>
</div>
<div class="container pt-5 mb-5">


    <div class="shadow p-3 mb-5 bg-white rounded">

        <div class="mb-5 mt-2 text-center">
            <div class="site-logo">
                <a href="index-2.html" class="d-block">
                    <img style="width: 100x; height: 50px;" src="assets/front/images/logo.png" alt="Image" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="card mb-3">

            <div class="row no-gutters">
                <?php
                $id = $_GET['id'];
                $sql = $koneksi->query("SELECT * FROM tbl_peserta a JOIN tbl_ayah b ON a.id_peserta = b.id_peserta JOIN tbl_ibu c ON a.id_peserta = c.id_peserta WHERE a.id_peserta='$id'");
                while ($data = $sql->fetch_assoc()) {
                    # code...
                ?>
                    <div class="col-md-6">
                        <img style="width: 500px;" src="assets/img/peserta/xperson_2.jpg.pagespeed.ic.ZhHlp5WpL3.jpg" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
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
                                        <a href="statusPendaftaranPeserta.php">
                                            <button type="button" class="btn btn-primary">
                                                KEMBALI
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="data_pesertaDidik.php?aksi=tolak&id=<?= $data['id_peserta'] ?>">
                                            <button type="button" class="btn btn-primary">
                                                CETAK
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";

?>