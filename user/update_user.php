<?php 
require_once '../koneksi.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id_user'];
    $nama = $_POST['nama_user'];
    $alamat= $_POST['alamat_user'];
    $telpon = $_POST['telepon_user'];
    $jekel = $_POST['jekel_user'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $username = $_POST['username_user'];
    $password= $_POST['password_user'];
	$passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $level= $_POST['level_user'];

    $query = "UPDATE tb_pasien SET nama_user = '$nama',
                                    alamat_user = '$alamat',
                                    telepon_user = '$telpon',
                                    jekel_user = '$jekel',
                                    tanggal_lahir = '$tanggal_lahir',
                                    username_user = '$username',
                                    password_user = '$passwordhash',
                                    level_user = '$level' WHERE id_user = '$id'";

$exeQuery =  mysqli_query($conn, $query);
echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Mengubah Data'
)) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Diubah'));
} else {
echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>