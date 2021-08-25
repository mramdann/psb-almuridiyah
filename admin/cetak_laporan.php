<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <title>Print</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../assets/front/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/front/bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/front/bootstrap-4.1.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../assets/front/bootstrap-4.1.3-dist/css/bootstrap-grid-min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="shadow p-3 mb-5 bg-white rounded">

            
             <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Laporan Data Peserta</h3>
                   
                </div>

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
    </div>
            <script>
                window.print()
            </script>

</div>
 </div>







    <script src="../assets/front/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="../assets/front/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
    <script src="../assets/front/bootstrap-4.1.3-dist/js/bootstrap-bundle.js"></script>
    <script src="../assets/front/bootstrap-4.1.3-dist/js/bootstrap-bundle.min.js"></script>


    <script src="../assets/front/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/front/js/jquery-migrate-3.0.1.min.js%2bjquery-ui.js%2bpopper.min.js.pagespeed.jc.XaLWx32sRV.js"></script>
    <script>
        eval(mod_pagespeed_X1YhEUUS1m);
    </script>
    <script>
        eval(mod_pagespeed_fXWdqsaBtM);
    </script>
    <script>
        eval(mod_pagespeed_rZWe67KEPr);
    </script>
    <script src="../assets/front/js/bootstrap.min.js"></script>
    <script src="../assets/front/js/owl.carousel.min.js%2bjquery.stellar.min.js%2bjquery.countdown.min.js.pagespeed.jc.EWz_dkT7J4.js"></script>
    <script>
        eval(mod_pagespeed_Z2HTwwXqMk);
    </script>
    <script>
        eval(mod_pagespeed_KTk4dd7HX8);
    </script>
    <script>
        eval(mod_pagespeed_UUMWAKsW5V);
    </script>
    <script src="../assets/front/js/bootstrap-datepicker.min.js%2bjquery.easing.1.3.js%2baos.js.pagespeed.jc.shTa_9g-oO.js"></script>
    <script>
        eval(mod_pagespeed_QLLBDL$X6T);
    </script>
    <script>
        eval(mod_pagespeed_PPHUCiMmNA);
    </script>
    <script>
        eval(mod_pagespeed_ir3t5r2_NA);
    </script>
    <script src="../assets/front/js/jquery.fancybox.min.js%2bjquery.sticky.js.pagespeed.jc.QErZfwMaqU.js"></script>
    <script>
        eval(mod_pagespeed_V0VZGTRxfd);
    </script>
    <script>
        eval(mod_pagespeed_4R6rkeKb1y);
    </script>
    <script src="../assets/front/js/jquery.mb.YTPlayer.min.js%2bmain.js.pagespeed.jc.yhTxC-d_2A.js"></script>
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