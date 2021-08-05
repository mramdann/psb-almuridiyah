<?php include "header.php";
include "koneksi.php";



if (isset($_POST['ajukan'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $tujuan = $_POST['tujuan'];
    $catatan = $_POST['catatan'];
    $waktu_masuk = $_POST['waktu_masuk'];
    $waktu_keluar = $_POST['waktu_keluar'];
    $status_ijin = 'Menunggu Persetujuan..!';

    $query = $koneksi->query("INSERT INTO tbl_ijin (id_karyawan, tujuan, catatan, waktu_masuk, waktu_keluar, status_ijin) VALUES ('$id_karyawan','$tujuan','$catatan','$waktu_masuk','$waktu_keluar','$status_ijin')");

    echo "<script>alert('data berhasil di tambahkan ! ...')</script>";
    echo "<script>location='trans_ijin_keluar_mes.php'</script>";
}


?>


<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Form Pendaftaran Peserta</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div style=" width:100%; margin:auto; padding:20px;">
                <div class="col">

                    <form class="form-contact contact_form text-center" action="" method="post" id="contactForm" novalidate>


                        <!--================= REGISTRASI PESERTA DIDIK ================================-->
                        <!--================= REGISTRASI PESERTA DIDIK ================================-->


                        <div class="row">

                            <div class="col-12 mt-2" style="border-bottom: 2px solid black;">
                                <h2 class="contact-title">Registrasi Peserta Didik</h2>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">JENIS PENDAFTARAN</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option selected>Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">PILIHAN JENJANG</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option selected>Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">ASAL SEKOLAH</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">JALUR PENDAFTARAN</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!--================= END REGISTRASI PESERTA DIDIK ================================-->
                        <!--================= END REGISTRASI PESERTA DIDIK ================================-->




                        <!--================= DATA PRIBADI ================================-->
                        <!--================= DATA PRIBADI ================================-->

                        <div class="row">


                            <div class="col-12 mt-5" style="border-bottom: 2px solid black;">
                                <h2 class="contact-title">Data Pribadi</h2>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">NIK</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Nomor KK</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Tempat Lahir</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Tanggal Lahir</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Agama</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Alamat'" placeholder='Masukan Alamat'></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">No HP</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Photo</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!--================= END DATA PRIBADI ================================-->
                        <!--================= END DATA PRIBADI ================================-->



                        <!--================= DATA AYAH KANDUNG ================================-->
                        <!--================= DATA AYAH KANDUNG ================================-->


                        <div class="row">

                            <div class="col-12 mt-2" style="border-bottom: 2px solid black;">
                                <h2 class="contact-title">Data Ayah Kandung</h2>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Nama Ayah Kandung</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Tahun Lahir</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Pendidikan</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option selected>Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Pekerjaan</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--================= END DATA AYAH KANDUNG ================================-->
                        <!--================= END DATA AYAH KANDUNG ================================-->



                        <!--================= DATA Ibu KANDUNG ================================-->
                        <!--================= DATA Ibu KANDUNG ================================-->

                        <div class="row">

                            <div class="col-12 mt-2" style="border-bottom: 2px solid black;">
                                <h2 class="contact-title">Data Ibu Kandung</h2>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Nama Ibu Kandung</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Tahun Lahir</label>
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Pendidikan</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option selected>Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" class="form-label">Pekerjaan</label>
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value=" 1">Pilih :</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--================= END DATA ibu KANDUNG ================================-->
                        <!--================= END DATA ibu KANDUNG ================================-->


                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">Kirim</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="special_cource padding_top">
    <div class="container">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="form-label">JENIS PENDAFTARAN</label>
                        <div class="form-select" id="default-select">
                            <select>
                                <option selected>Pilih :</option>
                                <option value="1">Dhaka</option>
                                <option value="1">Dilli</option>
                                <option value="1">Newyork</option>
                                <option value="1">Islamabad</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";

?>