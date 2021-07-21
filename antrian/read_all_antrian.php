<?php 
 require_once '../koneksi.php';

 $jam = $_GET["jam"];
 $query = "SELECT * FROM tb_antrian WHERE jam_antrian='$jam' ORDER BY id_antrian DESC";

 $result = mysqli_query($conn, $query);

 $array = array();

 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "resultAllAntrian" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "data tidak ditemukan"));
?>