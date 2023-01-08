<?php
    // connect to database
    $connect = mysqli_connect("localhost", "root", "", "pendaftaran");

    
    function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $connect;

    $nama = htmlspecialchars($data["Nama_Pasien"]);
    $lahir= htmlspecialchars($data["Tempat_dan_Tanggal_Lahir"]);
    $gender = htmlspecialchars($data["Jenis_Kelamin"]);
    $telepon = htmlspecialchars($data["Nomor_Telepon"]);
    $email = htmlspecialchars($data["Email"]);
    $penyakit = htmlspecialchars($data["Jenis_Penyakit"]);

    $query = "INSERT INTO datapasien
    VALUES
('', '$nama', '$lahir', '$gender','$telepon', '$email', '$penyakit' )    
";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM datapasien WHERE id=$id");

    return mysqli_affected_rows($connect);
}

function ubah($data){
    global $connect;
    
    $id = $data["id"];
    $nama = htmlspecialchars($data["Nama_Pasien"]);
    $lahir= htmlspecialchars($data["Tempat_dan_Tanggal_Lahir"]);
    $gender = htmlspecialchars($data["Jenis_Kelamin"]);
    $telepon = htmlspecialchars($data["Nomor_Telepon"]);
    $email = htmlspecialchars($data["Email"]);
    $penyakit = htmlspecialchars($data["Jenis_Penyakit"]);

    $query = "UPDATE datapasien SET 
                    nama = '$nama',
                    lahir = '$lahir',
                    gender = '$gender',     
                    telepon = '$telepon',
                    email = '$email',
                    penyakit = '$penyakit
                WHERE id = $id 
                    ";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

?>