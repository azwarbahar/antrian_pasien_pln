<?php

require_once '../koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $kode_antrian = $_POST['kode_antrian'];
    $kode_antrian = $kode_antrian + 1;
    $nama_pasien= $_POST['nama_pasien'];
    $tanggal_antrian = $_POST['tanggal_antrian'];
    $jam_antrian = $_POST['jam_antrian'];
    $status = $_POST['status'];
   

    $query = "INSERT INTO tb_antrian values('','$kode_antrian','$nama_pasien','$tanggal_antrian','$jam_antrian','$status')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Ditambahkan'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>