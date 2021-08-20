<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/academics/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 15:05:45 GMT -->

<head>
    <title>Print</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/front/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/front/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/front/bootstrap-4.1.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/front/bootstrap-4.1.3-dist/css/bootstrap-grid-min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">




    <div class="container pt-5 mb-5" style="width: 800px; height:500px">

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
                            <img style="width: 300px;" src="assets/img/peserta/xperson_2.jpg.pagespeed.ic.ZhHlp5WpL3.jpg" alt="...">
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
                                        <td> </td>
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

            <script>
                window.print()
            </script>

        </div>
    </div>







    <script src="assets/front/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/front/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <script src="assets/front/bootstrap-4.1.3-dist/js/bootstrap-bundle.js"></script>
    <script src="assets/front/bootstrap-4.1.3-dist/js/bootstrap-bundle.min.js"></script>


    <script src="assets/front/js/jquery-3.3.1.min.js"></script>
    <script src="assets/front/js/jquery-migrate-3.0.1.min.js%2bjquery-ui.js%2bpopper.min.js.pagespeed.jc.XaLWx32sRV.js"></script>
    <script>
        eval(mod_pagespeed_X1YhEUUS1m);
    </script>
    <script>
        eval(mod_pagespeed_fXWdqsaBtM);
    </script>
    <script>
        eval(mod_pagespeed_rZWe67KEPr);
    </script>
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/owl.carousel.min.js%2bjquery.stellar.min.js%2bjquery.countdown.min.js.pagespeed.jc.EWz_dkT7J4.js"></script>
    <script>
        eval(mod_pagespeed_Z2HTwwXqMk);
    </script>
    <script>
        eval(mod_pagespeed_KTk4dd7HX8);
    </script>
    <script>
        eval(mod_pagespeed_UUMWAKsW5V);
    </script>
    <script src="assets/front/js/bootstrap-datepicker.min.js%2bjquery.easing.1.3.js%2baos.js.pagespeed.jc.shTa_9g-oO.js"></script>
    <script>
        eval(mod_pagespeed_QLLBDL$X6T);
    </script>
    <script>
        eval(mod_pagespeed_PPHUCiMmNA);
    </script>
    <script>
        eval(mod_pagespeed_ir3t5r2_NA);
    </script>
    <script src="assets/front/js/jquery.fancybox.min.js%2bjquery.sticky.js.pagespeed.jc.QErZfwMaqU.js"></script>
    <script>
        eval(mod_pagespeed_V0VZGTRxfd);
    </script>
    <script>
        eval(mod_pagespeed_4R6rkeKb1y);
    </script>
    <script src="assets/front/js/jquery.mb.YTPlayer.min.js%2bmain.js.pagespeed.jc.yhTxC-d_2A.js"></script>
    <script>
        eval(mod_pagespeed_JJ0qd1BVvp);
    </script>
    <script>
        eval(mod_pagespeed_SfX2TaU8hS);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6798af8419f32f13","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/academics/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 15:06:13 GMT -->

</html>