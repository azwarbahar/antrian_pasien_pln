<?php

require_once '../../../koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama_lengkap = $_POST['nama_lengkap'];
    $spesialis = $_POST['spesialis'];
    $jam_mulai = $_POST['jam_mulai'];
    $absen = $_POST['absen'];
   

    $query = "INSERT INTO tb_dokter values('','$nama_lengkap','$spesialis','$jam_mulai','$absen')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Ditambahkan'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}
