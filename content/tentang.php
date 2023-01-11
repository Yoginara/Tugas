<?php
require '../functions.php';
$pasien = query("SELECT * FROM datapasien");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Content Rumah Sakit</title>
    <link rel="stylesheet" href="style.css  " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  </head>
  <body>
    <div class="container">
      <img src="../image/logo2.png" alt="" width="50px"><b>Rumah Sakit Online</b>
    </div>
    <!--navbar -->
    <ul class="nav justify-content-center" style="position: sticky; position: -webkit-stciky; top: 0;  z-index: 1; background-color: rgb(255, 255, 255);">
      <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="../profile/index.php">Home</a>
        </li>
        <a class="nav-link" href="index.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#layanan">Pelayanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tentang">Lokasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li>
        <a href="../tambah.php" class="btn btn-primary ms-auto">Daftar</a>
      </li>
    </ul>
    <!--Opening-->
    <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="../image/gambar1.jpg" class="d-block w-100" alt="gambar 1" />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../image/gambar2.jpg" class="d-block w-100" alt="gambar 2" />
        </div>
        <div class="carousel-item">
          <img src="../image/gambar3.jpg" class="d-block w-100" alt="gambar 3" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- layanan -->
    <section class="page-section bg-warning" id="layanan">
      <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Lokasi Kami</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <img src="../image/pelayanan.png" alt="" />
              </div>
              <h3 class="h4 mb-2">Pelayanan Kami</h3>
              <p class="text-muted mb-0">Anda Dapat Menikmati Pelayanan Kami</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <img src="../image/penunjang medis.png" alt="" />
              </div>
              <h3 class="h4 mb-2">Emergency</h3>
              <p class="text-muted mb-0">Kami Siap Membantu Anda Pada Saat Kapanpun</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <img src="../image/rawat inap.png" alt="" />
              </div>
              <h3 class="h4 mb-2">Rawat Inap</h3>
              <p class="text-muted mb-0">Kami Telah Terhubung Kerumah Sakit Di Seluruh Indonesia</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <img src="../image/hp.png" alt="" />
              </div>
              <h3 class="h4 mb-2">Bersifat Online</h3>
              <p class="text-muted mb-0">Anda Dapat Mendaftarkan Diri Tanpa Harus Datang Ke Lokasi</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir layanan -->

    <section id="tentang">
      <div class="container mb-5">
        <div class="row text-center mt-5">
          <h1>Tentang Kami</h1>
          <p>Kami Terhubung di Seluruh Rumah Sakit di Indonesia</p>
        </div>
        <a href="https://www.google.com/maps/@-2.550221,118.015568,4z?hl=id"><img class="img-fluid center" width="1300px" src="../image/map.png " alt="gambar.png" /></a>
      </div>
    </section>

    <!-- Footer-->
    <section id="contact">
      <footer class="footer text-center bg-secondary pb-5">
        <div class="container">
          <h2 class="text-center mt-0">Contact</h2>
          <hr class="divider" />
          <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Visi</h4>
              <p class="lead mb-0">Menjadi Rumah Sakit yang memiliki kualitas prima dalam pelayanan, pendidikan, penelitian, dan pengabdian kepada masyarakat di bidang kesehatan yang bertaraf internasional</p>
            </div>
  
            <!-- Footer About Text-->
            <div class="col-lg-4">
              <h4 class="text-uppercase mb-4">Misi</h4>
              <p class="lead mb-0">Menyelenggarakan pelayanan kesehatan yang paripurna, bermutu, dan terjangkau oleh semua lapisan masyarakat yang berorientasi pada keselamatan pasien dan kepuasan pelanggan.</p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Social Media</h4>
              <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
              <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
              <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/login"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <footer class="bg-warning text-white text-center pb-1">
      <p>Create with <i class="bi bi-chat-square-heart-fill"></i> by <a href="https://id.wikipedia.org/wiki/Rumah_sakit" class="text-white" style="text-decoration: none">RS Online</a></p>
    </footer>
    <!-- batas footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
