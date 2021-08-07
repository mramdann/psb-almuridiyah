<?php

$simpan = $_GET['simpan'];
// load konfigurasi koneksi ke database
include "../koneksi.php";

// get id dari url

if ($aksi == 'simpan_user') {

    if (isset($_POST['simpan'])) {
        $username = $_POST['username'];
        $nama_user = $_POST['nama_user'];
        $pass = $_POST['pass'];

        $query_simpan = $koneksi->query("INSERT INTO tbl_user (username, pass, nama_user) VALUES ('$username','$pass','$nama_user')");

        if ($query_simpan) {
            echo "<script>alert('Data berhasil disimpan !')</script>";
            echo "<script>location='user.php?aksi=list'</script>";
        } else {
            echo "<script>alert('Data gagal disimpan !')</script>";
            echo "<script>location='user.php?aksi=tambah'</script>";
        }
    }
}
