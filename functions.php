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
                    Nama_Pasien = '$nama',
                    Tempat_dan_Tanggal_Lahir = '$lahir',
                    Jenis_Kelamin = '$gender',
                    Nomor_Telepon = '$telepon',
                    Email = '$email',
                    Jenis_Penyakit = '$penyakit'
                    WHERE id = $id
                    ";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}


function cari($keyword){
    $query = "SELECT * FROM datapasien
                    WHERE
                Nama_Pasien LIKE '%$keyword%' OR
                Jenis_Penyakit LIKE '%$keyword%' OR
                Jenis_Kelamin LIKE '%$keyword%'
                    ";

    return query($query); 
}
      

function get_next_queue_number(){
    global $connect;
    // retrieve the current maximum queue number from the database
    $query = "SELECT MAX(queue_number) as max_number FROM datapasien";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $max_number = $row['max_number'];

    // if there are no existing queue numbers, start from 1
    if($max_number === null){
        return 1;
    }

    // otherwise, increment the current maximum queue number by 1
    return $max_number + 1;
}

$queue_number = get_next_queue_number();
$doctor = "John Smith";
$time = "2:00 PM";

      

?>