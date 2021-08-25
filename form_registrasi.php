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
    $color = 'text-warning';
    $id_thnajaran= $koneksi->query("select * from tbl_tahunajaran where id_thnajaran");



    // INPUT DATA JALUR PENDIDIKAN

    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
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

            $query = $koneksi->query("INSERT INTO tbl_peserta (nama, jenis_kelamin, nik, no_kk, tempat_lahir, tgl_lahir, no_hp, agama, alamat, foto, jenis_pendaftaran, asal_sekolah, jalur_pendaftaran, status_pendaftaran, icon, color, nama_ayah, pendidikan_ayah, pekerjaan_ayah, thn_lahir_ayah, nama_ibu, pendidikan_ibu, pekerjaan_ibu, thn_lahir_ibu) VALUES ('$nama','$kelamin','$nik','$kk','$tempat_lahir','$tgl_lahir','$hp','$agama','$alamat','$nama_gambar','$jenis_pendaftaran','$asal_sekolah','$jalur_pendaftaran','$status','$icon','$color','$nama_ayah',' $pendidikan_ayah',' $pekerjaan_ayah','$thn_lahir_ayah','$nama_ibu',' $pendidikan_ibu',' $pekerjaan_ibu','$thn_lahir_ibu')");

            echo "<script>alert('data berhasil di tambahkan ! ...')</script>";
            echo "<script>location='statusPendaftaranPeserta.php?aksi=list'</script>";
        } else {
            echo 'Simpan data gagal';
        }
    }
}

?>




<?php
                 $no = 1;
                 $sql = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
                 while ($data = $sql->fetch_assoc()) {
                 ?>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.bYKh1zv1gk.jpg)">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Form Pendaftaran Tahun Ajaran <?= $data['tahunAjaran'] ?></h2>
            </div>
        </div>
    </div>
</div>
        <?php } 
    ?>
        


<?php  
$sql = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
$data = $sql->fetch_assoc();
$status = $data['status'];

if ($status == "aktif"){
echo '
<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6 mb-5">
                <h2 class="section-title-underline mb-3">
                    <span>Form Pendaftaran</span>
                </h2>
            </div>
        </div>
<div class="shadow p-3 mb-5 bg-white rounded">
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
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg" placeholder="Nama Harus Sesuai Dengan KTP Atatu Ijazah" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="kelamin" id="kelamin" required>
                                <option></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nik">NIK</label>
                            <input type="number" name="nik" id="nik" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="kk">Nomor KK</label>
                            <input type="number" name="kk" id="kk" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="hp">No HP</label>
                            <input type="number" name="hp" id="hp" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="gambar">Foto</label>
                            <input type="file" name="gambar" id="gambar" class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama" id="agama" required>
                                <option selected></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required></textarea>
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
                            <select class="form-control" name="jenis_pendaftaran" id="jenis_pendaftaran" required>
                               <option selected></option>
                               <option value="Siswa Baru">Siswa Baru</option>
                               <option value="Pindahan">Pindahan</option> 
                            </select>
                        </div>

                       
                        <div class="col-md-6 form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control form-control-lg" placeholder="Masukan Asal Sekolah Anda" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="jalur_pendaftaran">Jalur Pendaftaran</label>
                            <select class="form-control" name="jalur_pendaftaran" id="jalur_pendaftaran" required>
                               <option selected></option>
                               <option value="Zonasi">Zonasi</option>
                               <option value="Afirmasi">Afirmasi</option>
                               <option value="Perpindahan Tugas Orang Tua atau Wali">Perpindahan Tugas Orang Tua atau Wali</option>
                               <option value="Prestasi">Prestasi</option>
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
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-lg" placeholder="Nama Asli ayah Kandung" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="thn_lahir_ayah">Tahun Lahir</label>
                            <input type="text" name="thn_lahir_ayah" id="thn_lahir_ayah" class="form-control form-control-lg" placeholder="Tahun Lahir ayah Kandung. Contoh : 1995" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pendidikan_ayah">Pendidikan</label>
                            <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" required>
                                <option selected></option>
                               <option value="SD">SD</option>
                                <option value="STLTP">STLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pekerjaan_ayah">Pekerjaan</label>
                            <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                                <option selected></option>
                                <option value="Buruh">Buruh</option>
                                <option value="Tani">Tani</option>
                                <option value="Wirasuasta">Wirasuasta</option>
                                <option value="Warung Kelontong">Warung Kelontong</option>
                                <option value="PNS">PNS</option>
                                <option value="Polri">Polri</option>
                                <option value="BUMN">BUMN</option>
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
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-lg" placeholder="Nama Asli Ibu Kandung" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="thn_lahir_ibu">Tahun Lahir</label>
                            <input type="text" name="thn_lahir_ibu" id="thn_lahir_ibu" class="form-control form-control-lg" placeholder="Tahun Lahir Ibu Kandung. Contoh : 1995" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pendidikan_ibu">Pendidikan</label>
                            <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" required>
                                <option selected></option>
                                <option value="SD">SD</option>
                                <option value="STLTP">STLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>

                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pekerjaan_ibu">Pekerjaan</label>
                            <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                                <option selected></option>
                                <option value="IRT">IRT</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Tani">Tani</option>
                                <option value="Wirasuasta" >Wirasuasta</option>
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
</div>';
}else{
echo '
<div class="container pt-5 mb-5">
    <div class="site-section">
        <div class="container">
            <div class="row  justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                   <div class="alert alert-danger" role="alert">Belum ada Pendaftaran Yang dibuka!</div>
                     <p><a href="http://localhost/psb-almuridiyah/" class="btn btn-primary px-4 rounded-0">Kembali</a></p>
                </div>
            </div>
     </div>
    </div>
</div>';
}

?>



<?php include "footer.php"; ?>