<?php 
require_once '../../../koneksi.php'; 

 $nama_lengkap = $_GET["nama_lengkap"];

 $query = "SELECT * FROM tb_dokter WHERE nama_lengkap ='$nama_lengkap'";

 $sql = mysqli_query($conn, $query);

 $ray = array();
 while ($row = mysqli_fetch_array($sql)) {
     array_push($ray, array(
         "id_dokter"=>$row['id_dokter'],
         "nama_lengkap"=>$row['nama_lengkap'],
         "spesialis"=>$row['spesialis'],
         "jam_mulai"=>$row['jam_mulai'],
         "absen"=>$row['absen']
     ));
 }

 echo json_encode($ray);
 mysqli_close($conn);

?>