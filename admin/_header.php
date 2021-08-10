<?php
session_start();
include "../koneksi.php";

// sytax untuk proteksi halaman admin
if (empty($_SESSION['admin']['username'])) {
    echo "<script>alert('Maaf anda harus login dulu !')</script>";
    echo "<script>location='login.php'</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Al-Muridiyah | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">





    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

</head>