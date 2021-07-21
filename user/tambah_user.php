<?php

require_once '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $id = $_POST['id_user'];
    $nama = $_POST['nama_user'];
    $alamat= $_POST['alamat_user'];
    $telpon = $_POST['telepon_user'];
    $jekel = $_POST['jekel_user'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $username = $_POST['username_user'];
    $password= $_POST['password_user'];
	$passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $level= $_POST['level_user'];

    $query = "INSERT INTO tb_pasien values('','$nama','$alamat','$telpon','$jekel','$tanggal_lahir','$username','$passwordhash','$level')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Ditambahkan'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>