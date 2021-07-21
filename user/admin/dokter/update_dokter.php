<?php 
require_once '../../../koneksi.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_dokter = $_POST['id_dokter'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $spesialis = $_POST['spesialis'];
    $absen = $_POST['absen'];
   
    $query = "UPDATE tb_dokter SET nama_lengkap = '$nama_lengkap', spesialis = '$spesialis', absen = '$absen' WHERE id_dokter = '$id_dokter'";

    
$exeQuery =  mysqli_query($conn, $query);
echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
)) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Diubah'));
} else {
echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>