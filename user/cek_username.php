<?php 
 require_once '../koneksi.php';

 $username = $_GET["username_user"];

 $query = "SELECT * FROM tb_pasien WHERE username_user='$username'";

 $sql = mysqli_query($conn, $query);

 $ray = array();
 while ($row = mysqli_fetch_array($sql)) {
     array_push($ray, array(
         "nama_user"=>$row['nama_user'],
         "alamat_user"=>$row['alamat_user'],
         "telepon_user"=>$row['telepon_user'],
         "jekel_user"=>$row['jekel_user'],
         "tanggal_lahir"=>$row['tanggal_lahir'],
         "username_user"=>$row['username_user'],
         "password_user"=>$row['password_user'],
         "level_user"=>$row['level_user'],
     ));
 }

 echo json_encode($ray);
 mysqli_close($conn);

?>