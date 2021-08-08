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
            DATA PESERTA DIDIK
        </h1>

    </section>

    <?php if ($view == 'list' or $view == NULL) { ?>
        <section class="content">

            <div class="card" style=" border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                <div class="card-header mb-5" style="margin-bottom: 40px;">
                    <h3>Table Data User</h3>
                    <a href="dataUser.php?aksi=tambah">
                        <button type="button" class="btn btn-primary">
                            Tambah Data User
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr class="bg-primary">
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama User</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from tbl_user ");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['nama_user'] ?></td>
                                        <td>
                                            <a href="dataUser.php?aksi=hapusUser&id=<?= $data['id_user'] ?>">
                                                <span></span>
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                            <a href="dataUser.php?aksi=editUser&id=<?= $data['id_user'] ?>">
                                                <i class="material-icons">edit</i>
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
        </section>

    <?php } else if ($view == 'hapusUser') { ?>
        <!-- # syntax delete data loker -->
        <?php
        $id = $_GET['id'];

        $sql = $koneksi->query("DELETE FROM tbl_user WHERE id_user='$id'");

        if ($sql == '1') {
            echo "<script>alert('Data berhasil dihapus !')</script>";
            echo "<script>location='dataUser.php?aksi=list'</script>";
        } else {
            echo "<script>location='dataUser.php?aksi=list'</script>";
        }

        ?>



    <?php } else if ($view == 'tambah') {

        // Syntax untuk menyimpan data ke tbl_user jika tombol simpan ditekan
        if (isset($_POST['simpan'])) {
            $username = $_POST['username'];
            $nama_user = $_POST['nama_user'];
            $pass = $_POST['pass'];

            $query_simpan = $koneksi->query("INSERT INTO tbl_user (username, password, nama_user) VALUES ('$username','$pass','$nama_user')");

            if ($query_simpan) {
                echo "<script>alert('Data berhasil disimpan !')</script>";
                echo "<script>location='dataUser.php?aksi=list'</script>";
            } else {
                echo "<script>alert('Data gagal disimpan !')</script>";
                echo "<script>location='dataUser.php?aksi=tambah'</script>";
            }
        } ?>


        <section class="content">
            <div style="width:80%; height:500px; margin:auto; position:relative;">
                <div class="card" style=" width:450px; position:absolute; top:100px; left:50%; transform: translateX(-50%); border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                    <div class="card-header mb-5" style="margin-bottom: 40px;">
                        <h3>Form Tambah User</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST">
                            <fieldset>

                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Input username" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_user">Nama Lengkap </label>
                                    <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Input nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password </label>
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Input password" required>
                                </div>
                            </fieldset>
                            <div class="form-actions text-center">
                                <button class="btn btn-primary" type="submit" name="simpan">Simpan</button></a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </section>


    <?php } else if ($view == 'editUser') {


        // Syntax untuk update/edit data ke tbl_loker jika tombol simpan di tekan
        $id = $_GET['id'];
        if (isset($_POST['update'])) {
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $nama_user = $_POST['nama_user'];

            $query = $koneksi->query("UPDATE tbl_user SET username='$username',password='$pass',nama_user='$nama_user' where id_user='$id'");
            print_r($query);
            if ($query) {
                echo "<script>alert('Data user berhasil diubah !')</script>";
            } else {
                echo "<script>alert('Data user gagal diubah !')</script>";
            }
            echo "<script>location='dataUser.php?aksi=editUser&id=$id'</script>";
            // echo "<script>alert('Login Berhasil ! ...')</script>";
            // echo "<script>location='master_user.php'</script>";
        }
    ?>




        <section class="content">
            <div style="width:80%; height:500px; margin:auto; position:relative;">
                <div class="card" style=" width:450px; position:absolute; top:100px; left:50%; transform: translateX(-50%); border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 7px; box-shadow: -3px 4px 2px rgba(0, 0, 0, 0.3); padding-left: 15px; padding-right: 15px;">

                    <div class="card-header mb-5" style="margin-bottom: 40px;">
                        <h3>Form Tambah User</h3>
                        <a href="dataUser.php?aksi=list"> <button type="button" class="btn btn-primary">
                                Kembali
                            </button></a>
                    </div>

                    <div class="card-body">

                        <?php
                        $id = $_GET['id'];
                        $sql = $koneksi->query("SELECT * FROM tbl_user WHERE id_user='$id'");
                        while ($data = $sql->fetch_assoc()) {
                            # code...
                        ?>

                            <form method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="nama_user">Nama Lengkap </label>
                                        <input type="text" class="form-control" name="nama_user" id="nama_user" value=" <?= $data['nama_user'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username </label>
                                        <input type="text" class="form-control" name="username" id="username" value=" <?= $data['username'] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="pass">Password </label>
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Input password" required>
                                    </div>
                                </fieldset>
                                <div class="form-actions text-center">
                                    <button class="btn btn-primary" type="submit" name="update">update</button></a>
                                </div>

                            </form>
                        <?php
                        } ?>
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