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


<!-- =========VIEW DATA PESERTA======== -->
<!-- =========VIEW DATA PESERTA======== -->

<?php if ($view == 'list' or $view == NULL) { ?>

    <div class="container pt-5 mb-5">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Pengumuman Hasil</span>
                </h2>
            </div>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, iure dolorum! Nam veniam tempore tenetur aliquam architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque veritatis numquam placeat?</p>
            </div>
            <div class="col-lg-4">
                <p>Nam veniam tempore tenetur aliquam
                    architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque veritatis numquam placeat?</p>
            </div>
        </div>
    </div>

    <div class="container pt-5 mb-5">
        <div class="shadow p-3 mb-5 bg-white rounded">

            <div class="card-header mb-5">
                <nav class="navbar navbar-light bg-light">
                    <h3>Peserta Yang Lolos / Tidak Lolos</h3>
                    <form class="form-inline" action="" method="POST">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari" aria-label="Search" autofocus autocomplete="off">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Cari</button>
                    </form>
                </nav>
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
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            $sql = $koneksi->query("select * from tbl_peserta");

                            if (isset($_POST["cari"])) {
                                $sql = $koneksi->query("select * from tbl_peserta WHERE nama='$namaPeserta'");
                                return $sql;
                                $hasil = $sql->num_rows;
                                $namaPeserta = $_POST["cari"];
                            }

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
                                    <td>
                                        <p class="<?= $data['color'] ?>"><?= $data['status_pendaftaran'] ?> <i class="material-icons"><?= $data['icon'] ?></p></i>
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

    <div class="section-bg style-1" style="background-image:url(images/xhero_1.jpg.pagespeed.ic.-yaFVozZ39.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- =========END VIEW DATA PESERTA======== -->
    <!-- =========END VIEW DATA PESERTA======== -->


    <!-- =========DETAIL DATA PESERTA======== -->
    <!-- =========DETAIL DATA PESERTA======== -->

<?php } else if ($view == 'detailPeserta') { ?>

    <div class="container pt-5 mb-5">


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
                    $sql = $koneksi->query("SELECT * FROM tbl_peserta a JOIN tbl_ayah b ON a.id_peserta = b.id_peserta JOIN tbl_ibu c ON a.id_peserta = c.id_peserta WHERE a.id_peserta='$id'");
                    while ($data = $sql->fetch_assoc()) {
                        # code...
                    ?>
                        <div class="col-md-6">
                            <img style="width: 500px;" src="assets/img/peserta/xperson_2.jpg.pagespeed.ic.ZhHlp5WpL3.jpg" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title <?= $data['color'] ?>"><?= $data['status_pendaftaran'] ?><i class="material-icons"><?= $data['icon'] ?></i></h5>
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

                                </table>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="mb-5 mt-2 text-center">
                <div class="site-logo">
                    <a href="statusPendaftaranPeserta.php?aksi=list">
                        <button type="button" class="btn btn-primary">
                            KEMBALI
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- =========END DETAIL DATA PESERTA======== -->
    <!-- =========END DETAIL DATA PESERTA======== -->

<?php } ?>

<?php include "footer.php"; ?>