<?php
require '../functions.php';
$pasien = query("SELECT * FROM datapasien");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sejarah Rumah Sakit</title>
    <link rel="stylesheet" href="style.css  " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <img src="../image/logo2.png" alt="" width="50px"><b>Rumah Sakit Online</b>
    </div>
    <!--navbar -->
        <!--navbar -->
        <ul class="nav justify-content-center" style="position: sticky; position: -webkit-stciky; top: 0;  z-index: 1; background-color: rgb(255, 255, 255);">
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="../profile/index.php">Home</a>
            </li>
            <a class="nav-link" href="index.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Pelayanan</a>
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
    <!--Penutup Opening-->
    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="jumbotron row text-center mb-5">
          <div class="col">
            <img src="../image/logo2.png" alt="foto yoginara" width="200" class="rounded-circle img-thumbnail mb-3" />
            <h2>Sejarah Rumah Sakit</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <p>
              Dalam sejarah kuno, kepercayaan dan pengobatan berhubungan sangat erat. Salah satu contoh institusi pengobatan tertua adalah kuil Mesir. Kuil Asclepius di Yunani juga dipercaya memberikan pengobatan kepada orang sakit, yang
              kemudian juga diadopsi bangsa Romawi sebagai kepercayaan. Kuil Romawi untuk Æsculapius dibangun pada tahun 291 SM di tanah Tiber, Roma dengan ritus-ritus hampir sama dengan kepercayaan YunanInstitusi yang spesifik untuk
              pengobatan pertama kali, ditemukan di India. Rumah sakit Brahmanti pertama kali didirikan di Sri Lanka pada tahun 431 SM, kemudian Raja Ashoka juga mendirikan 18 rumah sakit di Hindustan pada 230 SM dengan dilengkapi tenaga
              medis dan perawat yang dibiayai anggaran kerajaan.Rumah sakit pertama yang melibatkan pula konsep pengajaran pengobatan, dengan mahasiswa yang diberikan pengajaran oleh tenaga ahli, adalah Akademi Gundishapur di Kerajaan
              Persia.Bangsa Romawi menciptakan valetudinaria untuk pengobatan budak, gladiator, dan prajurit sekitar 100 SM. Adopsi kepercayaan Kristiani turut memengaruhi pelayanan medis di sana. Konsili Nicea I pada tahun 325
              memerintahkan pihak Gereja untuk juga memberikan pelayanan kepada orang-orang miskin, sakit, janda, dan musafir. Setiap satu katedral di setiap kota harus menyediakan satu pelayanan kesehatan. Salah satu yang pertama kali
              mendirikan adalah Saint Sampson di Konstantinopel dan Basil, bishop of Caesarea. Bangunan ini berhubungan langsung dengan bagunan gereja, dan disediakan pula tempat rpisah untuk penderita lepra.Rumah sakit abad pertengahan di
              Eropa juga mengikuti pola tersebut.
            </p>
          </div>
          <div class="col">
            <p>
              Di setiap tempat peribadahan biasanya terdapat pelayanan kesehatan oleh pendeta dan suster (Frase Prancis untuk rumah sakit adalah hôtel-Dieu, yang berarti "hostel of God.").Namun beberapa di antaranya bisa pula terpisah dari
              tempat peribadahan. Ditemukan pula rumah sakit yang terspesialisasi untuk penderita lepra, kaum miskin, atau musafir.Rumah sakit dalam sejarah Islam memperkenalkan standar pengobatan yang tinggi pada abad 8 hingga 12. Rumah
              sakit pertama dibangun pada abad 9 hingga 10 mempekerjakan 25 staff pengobatan dan perlakuan pengobatan berbeda untuk penyakit yang berbeda pula. Rumah sakit yang didanai pemerintah muncul pula dalam sejarah Tiongkok pada awal
              abad 10.Perubahan rumah sakit menjadi lebih sekuler di Eropa terjadi pada abad 16 hingga 17. Tetapi baru pada abad 18 rumah sakit modern pertama dibangun dengan hanya menyediakan pelayanan dan pembedahan medis. Inggris pertama
              kali memperkenalkan konsep ini. Guy's Hospital didirikan di London pada 1724 atas permintaan seorang saudagar kaya Thomas Guy. Rumah sakit yang dibiayai swasta seperti ini kemudian menjamur di seluruh Inggris Raya. Di koloni
              Inggris di Amerika kemudian berdiri Pennsylvania General Hospital di Philadelphia pada 1751. Setelah terkumpul sumbangan £2,000, di Eropa Daratan biasanya rumah sakit dibiayai dana publik. Namun secara umum pada pertengahan
              abad 19 hampir seluruh negara di Eropa dan Amerika Utara telah memiliki keberagaman rumah sakit
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- hobby -->
    <section id="hobby">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2>Dokter</h2>
          </div>
        </div>
        <div class="card mb-3">
          <img src="../image/dokter.png" class="card-img-top" alt="foto_dokter" />
          <div class="card-body">
            <h5 class="title card-text">Ikatan Dokter Indonesia</h5>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Hobby -->

    <!-- footer -->
    <footer class="bg-warning text-white text-center pb-1">
      <p>Create with <i class="bi bi-chat-square-heart-fill"></i> by <a href="https://id.wikipedia.org/wiki/Rumah_sakit" class="text-white" style="text-decoration: none">RS Online</a></p>
    </footer>
    <!-- batas footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
