<?php 

require_once '../koneksi.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nama_user = $_POST['nama_user'];

    $query = "DELETE FROM tb_pasien WHERE nama_user = '$nama_user'";

    $exeQuery =  mysqli_query($conn, $query);
    
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menghapus Data'
        )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Dihapus'));
    } else {
        echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
    }
?>