<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Al-Muridiyah | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                <a href="#"><b>Login </b>Form</a>
            </div>
            <p class="login-box-msg">Login sebagai Administrator</p>

            <!-- untuk tampilan dan form login  -->
            <form method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Input username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" name="login" class="btn btn-success btn-block btn-flat">LOGIN</button>
                    </div>
                </div>
            </form>

            <?php
            // sytax proses login 
            session_start();
            include "../koneksi.php";

            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = $koneksi->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

                $cek = $sql->num_rows;

                if ($cek == "1") {
                    $akun = $sql->fetch_assoc();
                    $_SESSION['admin'] = $akun;

                    echo "<script>location='index.php'</script>";
                } else {
                    echo "<script>alert('login gagal !')</script>";
                    echo "<script>location='login.php'</script>";
                }
            }
            // end sytax proses login 
            ?>

        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>