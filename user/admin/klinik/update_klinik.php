<?php 
require_once '../../../koneksi.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_klinik = $_POST['id_klinik'];
    $nama_klinik = $_POST['nama_klinik'];
    $lokasi_klinik= $_POST['lokasi_klinik'];
   
    $query = "UPDATE tb_klinik SET nama_klinik = '$nama_klinik', lokasi_klinik = '$lokasi_klinik' WHERE id_klinik = '$id_klinik'";

    
$exeQuery =  mysqli_query($conn, $query);
echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
)) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Diubah'));
} else {
echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>