<?php
require 'functions.php';
$pasien = query("SELECT * FROM datapasien");

if(isset($_POST["cari"])){
    $pasien = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
</head>
<body>
            <!--navbar -->
            <ul class="nav justify-content-center" style="position: sticky; position: -webkit-stciky; top: 0;  z-index: 1; background-color: #C0C0C0;">
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="profile/index.php">Home</a>
            </li>
            <a class="nav-link" href="content/index.php">Profile</a>
          </li>
        </ul>

      <div class="container-md">
            <div class="text-center my-5">
              <img src="image/logo.png" alt="logo" width="200" />
            </div>
            <h1 class="text-center mb-5">Daftar Pasien</h1>
            <form action="" method="post">
                <input type="text" name="keyword" autofocus placeholder="Cari nama..." autocomplete="off">
                <button type="submit" name="cari">Search</button>
            </form>

                <table class="table table-bordered">
                    <tr style="text-align: center;" class="table-warning">
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Tempat/Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telephone</th>
                        <th>Email</th>
                        <th>Jenis Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $i = 1;?>
                <?php foreach($pasien as $row) : ?>
                    <tr class="table-secondary">
                        <td><?= $i; ?></td>
                        <td><?= $row["Nama_Pasien"]; ?></td>
                        <td><?= $row["Tempat_dan_Tanggal_Lahir"]; ?></td>
                        <td><?= $row["Jenis_Kelamin"]; ?></td>
                        <td><?= $row["Nomor_Telepon"]; ?></td>
                        <td><?= $row["Email"]; ?></td>
                        <td><?= $row["Jenis_Penyakit"]; ?></td>
                        
                        <td>
                            <a href="ubah.php?id=<?= $row["id"];?>"><button type="button" class="btn btn-info">Edit</button></a>  
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda Yakin ?');"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
                <br>
                    <a href="tambah.php" class="btn btn-primary ms-auto"> Tambahkan Diri Anda</a>
    </div>
</body>
</html>