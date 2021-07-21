<?php

require_once '../../../koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama_klinik = $_POST['nama_klinik'];
    $lokasi_klinik = $_POST['lokasi_klinik'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
   

    $query = "INSERT INTO tb_klinik values('','$nama_klinik','$lokasi_klinik','$latitude','$longitude')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Ditambahkan'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}
