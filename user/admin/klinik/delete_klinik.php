<?php 

require_once '../../../koneksi.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id_klinik = $_POST['id_klinik'];

    $query = "DELETE FROM tb_klinik WHERE id_klinik = '$id_klinik'";

    $exeQuery =  mysqli_query($conn, $query);
    
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menghapus Data'
        )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Dihapus'));
    } else {
        echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
    }
?>