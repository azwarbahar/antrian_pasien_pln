<?php
require_once '../../../koneksi.php';

 $jam_mulai = $_GET["jam_mulai"];

 $query = "SELECT * FROM tb_dokter WHERE jam_mulai ='$jam_mulai'";

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