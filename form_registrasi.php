<?php include "header.php";
include "koneksi.php";



if (isset($_POST['daftar'])) {

    // INPUT DATA DIRI PESERTA

    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $nik = $_POST['nik'];
    $kk = $_POST['kk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $hp = $_POST['hp'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $status = 'Menunggu...!';
    $icon = 'info';


    // INPUT DATA JALUR PENDIDIKAN

    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $jenjang = $_POST['jenjang'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jalur_pendaftaran = $_POST['jalur_pendaftaran'];

    // INPUT DATA AYAH
    $nama_ayah = $_POST['nama_ayah'];
    $thn_lahir_ayah = $_POST['thn_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];


    // INPUT DATA IBU

    $nama_ibu = $_POST['nama_ibu'];
    $thn_lahir_ibu = $_POST['thn_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];



    // UPLOAD GAMBAR

    $tempdir = "assets/img/peserta/";
    if (!file_exists($tempdir))
        mkdir($tempdir, 0755);
    //gambar akan di simpan di folder gambar
    $target_path = $tempdir . basename($_FILES['gambar']['name']);

    //nama gambar
    $nama_gambar = $_FILES['gambar']['name'];
    //ukuran gambar
    $ukuran_gambar = $_FILES['gambar']['size'];

    $fileinfo = @getimagesize($_FILES["gambar"]["tmp_name"]);
    //lebar gambar
    $width = $fileinfo[0];
    //tinggi gambar
    $height = $fileinfo[1];
    if ($ukuran_gambar > 81920) {
        echo 'Ukuran gambar melebihi 80kb';
    } else if ($width > "2000" || $height > "2000") {
        echo 'Ukuran gambar harus 480x640';
    } else {
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path)) {

            $query = $koneksi->query("INSERT INTO tbl_peserta (nama, jenis_kelamin, nik, no_kk, tempat_lahir, tgl_lahir, no_hp, agama, alamat, foto, jenis_pendaftaran, jenjang, asal_sekolah, jalur_pendaftaran, status_pendaftaran, icon) VALUES ('$nama','$kelamin','$nik','$kk','$tempat_lahir','$tgl_lahir','$hp','$agama','$alamat','$nama_gambar','$jenis_pendaftaran','$jenjang','$asal_sekolah','$jalur_pendaftaran','$status','$icon')");

            $id = $koneksi->insert_id;

            $queryAyah = $koneksi->query("INSERT INTO tbl_ayah (nama_ayah, pendidikan_a, pekerjaan_a, thn_lahir_a, id_peserta) VALUES (' $nama_ayah',' $pendidikan_ayah',' $pekerjaan_ayah','$thn_lahir_ayah','$id')");

            $queryIbu = $koneksi->query("INSERT INTO tbl_ibu (nama_ibu, pendidikan_i, pekerjaan_i, thn_lahir_i, id_peserta) VALUES (' $nama_ibu',' $pendidikan_ibu',' $pekerjaan_ibu','$thn_lahir_ibu','$id')");

            echo "<script>alert('data berhasil di tambahkan ! ...')</script>";
            echo "<script>location='form_registrasi.php'</script>";
        } else {
            echo 'Simpan data gagal';
        }
    }




    // Ambil Data Gambar yang Dikirim dari Form



}

?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.bYKh1zv1gk.jpg)">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Form Pendaftaran</h2>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>Form Pendaftaran</span>
                </h2>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="card">
                <div class="card-body">

                    <!--================= DATA PRIBADI ================================-->
                    <!--================= DATA PRIBADI ================================-->

                    <div class="row mb-5">
                        <div class="col-lg-3">
                            <h4 class="section-title-underline mb-3"><span>Data Diri</span></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg" placeholder="Nama Harus Sesuai Dengan KTP Atatu Ijazah">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="kelamin" id="kelamin">
                                <option></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nik">NIK</label>
                            <input type="number" name="nik" id="nik" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="kk">Nomor KK</label>
                            <input type="number" name="kk" id="kk" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="hp">No HP</label>
                            <input type="number" name="hp" id="hp" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="gambar">Foto</label>
                            <input type="file" name="gambar" id="gambar" class="form-control form-control-lg">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama" id="agama">
                                <option selected></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>


                    <br>

                    <!--================= END DATA PRIBADI ================================-->
                    <!--================= END DATA PRIBADI ================================-->


                    <!--=================  DATA PEDIDIKAN ================================-->
                    <!--=================  DATA PEDIDIKAN ================================-->

                    <div class="row mb-5">
                        <div class="col-lg-3">
                            <h4 class="section-title-underline mb-3"><span>Pendidikan</span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                            <select class="form-control" name="jenis_pendaftaran" id="jenis_pendaftaran">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_regist");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['jenis_pendaftaran'] ?>"><?= $data['jenis_pendaftaran'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="jenjang">Pilihan Jenjang</label>
                            <select class="form-control" name="jenjang" id="jenjang">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_regist");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['jenjang'] ?>"><?= $data['jenjang'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control form-control-lg" placeholder="Masukan Asal Sekolah Anda">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="jalur_pendaftaran">Jalur Pendaftaran</label>
                            <select class="form-control" name="jalur_pendaftaran" id="jalur_pendaftaran">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_regist");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['jalur_pendaftaran'] ?>"><?= $data['jalur_pendaftaran'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>
                    </div>

                    <!--================= END DATA PEDIDIKAN ================================-->
                    <!--================= END DATA PEDIDIKAN ================================-->

                    <!--================= DATA AYAH KANDUNG ================================-->
                    <!--================= DATA AYAH KANDUNG ================================-->
                    <div class="row mb-5">
                        <div class="col-lg-3">
                            <h4 class="section-title-underline mb-3"><span>Data Ayah Kandung</span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nama_ibu">Nama ayah Kandung</label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-lg" placeholder="Nama Asli ayah Kandung">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="thn_lahir_ayah">Tahun Lahir</label>
                            <input type="text" name="thn_lahir_ayah" id="thn_lahir_ayah" class="form-control form-control-lg" placeholder="Tahun Lahir ayah Kandung. Contoh : 1995">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pendidikan_ayah">Pendidikan</label>
                            <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_pendidikan");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['pendidikan'] ?>"><?= $data['pendidikan'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pekerjaan_ayah">Pekerjaan</label>
                            <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_pekerjaan");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['pekerjaan'] ?>"><?= $data['pekerjaan'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>
                    </div>

                    <!--================= END DATA AYAH KANDUNG ================================-->
                    <!--================= END DATA AYAH KANDUNG ================================-->

                    <!--================= DATA Ibu KANDUNG ================================-->
                    <!--================= DATA Ibu KANDUNG ================================-->

                    <div class="row mb-5">
                        <div class="col-lg-3">
                            <h4 class="section-title-underline mb-3"><span>Data Ibu Kandung</span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nama_ibu">Nama Ibu Kandung</label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-lg" placeholder="Nama Asli Ibu Kandung">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="thn_lahir_ibu">Tahun Lahir</label>
                            <input type="text" name="thn_lahir_ibu" id="thn_lahir_ibu" class="form-control form-control-lg" placeholder="Tahun Lahir Ibu Kandung. Contoh : 1995">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pendidikan_ibu">Pendidikan</label>
                            <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_pendidikan");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['pendidikan'] ?>"><?= $data['pendidikan'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pekerjaan_ibu">Pekerjaan</label>
                            <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                <option selected></option>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM tbl_pekerjaan");
                                while ($data = $sql->fetch_assoc()) {
                                    # code...
                                ?>
                                    <option value="<?= $data['pekerjaan'] ?>"><?= $data['pekerjaan'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>
                    </div>

                    <!--================= END DATA ibu KANDUNG ================================-->
                    <!--================= END DATA ibu KANDUNG ================================-->

                    <div class="row justify-content-center align-items-center">
                        <div class="col-12">
                            <button type="submit" name="daftar" class="btn btn-primary ">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>


    </div>
</div>



<?php include "footer.php"; ?>