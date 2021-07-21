<?php 
 require_once '../koneksi.php';

 $level_user = $_GET["level_user"];

 $query = "SELECT * FROM tb_pasien WHERE level_user='$level_user'";

 $result = mysqli_query($conn, $query);

 $array = array();

 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "resultpasien" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "data tidak ditemukan"));
?>