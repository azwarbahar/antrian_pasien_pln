<?php 
require_once '../../../koneksi.php'; 

 $query = "SELECT * FROM tb_dokter ORDER BY id_dokter";

 $result = mysqli_query($conn, $query);

 $array = array();

 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "resultAbsenDokter" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "data tidak ditemukan"));
?>