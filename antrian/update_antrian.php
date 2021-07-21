<?php 
require_once '../koneksi.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $kode_antrian = $_POST['kode_antrian'];
    $tanggal_antrian = $_POST['tanggal_antrian'];
    $status = $_POST['status'];
    $jam_antrian = $_POST['jam_antrian'];
   
    $query = "UPDATE tb_antrian SET status = '$status' WHERE kode_antrian = '$kode_antrian' AND tanggal_antrian = '$tanggal_antrian' AND jam_antrian='$jam_antrian'";

    
$exeQuery =  mysqli_query($conn, $query);
echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
)) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Diubah'));
} else {
echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>