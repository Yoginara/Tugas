<?php
require 'functions.php';

$id = $_GET["id"];
// query data berdasarkan id
$psn = query("SELECT * FROM datapasien WHERE id= $id")[0];

if( isset($_POST["submit"]) ){

      //cek data berhasil diubah atau gagal
      if( ubah($_POST) > 0 ){
    echo "<script>
            alert('Data Berhasil Diubah !');
            document.location.href = 'index.php';
          </script>";
      } else {
        echo "<script>
        alert('Data Gagal Diubah !');
        document.location.href = 'index.php';
      </script>";
      }

}  

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
</head>
<body>
<section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
              <img src="image/logo.png" alt="logo" width="200" />
            </div>
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4">Ubah Data</h1>
                <form  action="" method="post" class="needs-validation" >
                <div class="mb-3">
                <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
                  </div>
                    <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Nama_Pasien">Nama Pasien :</label>
                    <input id="Nama_Pasien" type="text" class="form-control" name="Nama_Pasien" required value="<?=$psn["Nama_Pasien"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Tempat_dan_Tanggal_Lahir">Tempat/Tanggal Lahir :</label>
                    <input id="Tempat_dan_Tanggal_Lahir" type="text" class="form-control" name="Tempat_dan_Tanggal_Lahir" required value="<?=$psn["Tempat_dan_Tanggal_Lahir"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Jenis_Kelamin">Jenis Kelamin :</label>
                    <input id="Jenis_Kelamin" type="text" class="form-control" name="Jenis_Kelamin" required value="<?=$psn["Jenis_Kelamin"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Nomor_Telepon">Nomor Telepon :</label>
                    <input id="Nomor_Telepon" type="text" class="form-control" name="Nomor_Telepon" required value="<?=$psn["Nomor_Telepon"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Email">Email :</label>
                    <input id="Email" type="text" class="form-control" name="Email" value="" required value="<?=$psn["Email"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Jenis_Penyakit">Gejala:</label>
                    <input id="Jenis_Penyakit" type="text" class="form-control" name="Jenis_Penyakit" required value="<?=$psn["Jenis_Penyakit"];?>"/>
                  </div>

                  <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary ms-auto" name="submit">ubah </button>
                  </div>
                </form>
              </div>
              <div class="card-footer py-3 border-0">
                <div class="text-center"> ANDA AKAN MENERIMA PESAN MELALUI EMAIL ATAU NOMOR TELEPON !!</div>
              </div>
            </div>
            <div class="text-center mt-5 text-muted">Salam Sehat &mdash; Rumah Sakit Online</div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>