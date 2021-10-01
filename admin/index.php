<?php
// memanggil file header dan menu
include "_header.php";
include "_menu.php";
include "../koneksi.php";
?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php $sql = $koneksi->query("select * from tbl_user");
                            echo $sql->num_rows; ?>
                        </h3>
                        <p>Data User</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php $sql2 = $koneksi->query("select * from tbl_peserta where status='Proses seleksi'");
                            echo $sql2->num_rows; ?></h3>

                        <p>Peserta Menunggu Persetujuan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php $sql2 = $koneksi->query("select * from tbl_peserta where status='Lulus'");
                            echo $sql2->num_rows; ?></h3>

                        <p>Peserta Didik Lulus</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php $sql2 = $koneksi->query("select * from tbl_peserta where status='Tidak Lulus'");
                            echo $sql2->num_rows; ?></h3>

                        <p>Peserta Tidak Lulus</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-times"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </section>
</div>

<?php
// memanggil file footer
include "_footer.php";
?>