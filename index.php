<?php include "header.php"; ?>


<div class="hero-slide owl-carousel site-blocks-cover">
  <div class="intro-section" style="background-image:url(assets/logo.jpeg)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h3 class="text-white">Website Penerimaan Peserta didik Baru</h3>
          <h1>SMK Almuridiyah</h1>
          <h2 class="text-white">TAHUN AJARAN <?php
                                              include 'koneksi.php';
                                              $no = 1;
                                              $sql = $koneksi->query("select * from tbl_tahunajaran where status='aktif'");
                                              $data = $sql->fetch_assoc();
                                              echo $data['tahunAjaran'];
                                              ?>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="intro-section" style="background-image:url(assets/logo.jpeg)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h1>Kamu Bisa Belajar Apa Saja</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
  <!-- <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <img src="assets/front/images/xcourse_4.jpg.pagespeed.ic.tqNvuJbiJI.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 ml-auto align-self-center">
          <h2 class="section-title-underline mb-5">
            <span>Program Sekolah</span>
          </h2>
          <p>Untuk meningkatkan prestasi olahraga dan membangun karakter para siswa/i, kami menawarkan serangkaian jenis bela diri dan olahraga, seperti karate, pencak silat, taekwondo, renang, tenis, bulu tangkis, sepak bola, atletik, bola basket, tenis meja, bola voli, sepak takraw dan panjat tebing.</p>
          <p>
            SMA Almuridiyah juga secara arah membina siswa/i yang ingin meningkatkan capaian akademis masing-masing dan ikut serta dalam lomba-lomba di luar sekolah.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
          <img src="assets/front/images/xcourse_5.jpg.pagespeed.ic.rI86ZBarTv.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
          <h2 class="section-title-underline mb-5">
            <span>KEGIATAN EKSTRAKURIKULER</span>
          </h2>
          <p>Pada sore hari tersedia aneka program waktu luang di berbagai bidang seperti olahraga, kesenian atau musik. Setiap tahun para siswa/i berpartisipasi dalam perlombaan di tingkat nasional dan internasional dan sudah meraih banyak penghargaan di beberapa kategori berbeda.
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="section-bg style-1" style="background-image:url(images/xhero_1.jpg.pagespeed.ic.-yaFVozZ39.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center">
          <span class="icon flaticon-mortarboard"></span>
          <h3>Philosphy</h3>

        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center">
          <span class="icon flaticon-school-material"></span>
          <h3>Prinsip Akademik</h3>

        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center">
          <span class="icon flaticon-library"></span>
          <h3>Kunci Sukses</h3>
        </div>
      </div>
    </div>
  </div> -->

  <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-4 mb-5">
          <h2 class="section-title-underline mb-5">
            <span>Bergabung Dengan Kami</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-mortarboard text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Personalisasi Pembelajaran</h2>

              <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-school-material text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Sekolah Tepercaya</h2>

              <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-library text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Peralatan untuk Siswa</h2>

              <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>