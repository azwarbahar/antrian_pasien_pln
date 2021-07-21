<?php 
 require_once '../koneksi.php';

 $tanggal_antrian = $_GET["tanggal_antrian"];
 $jam = $_GET["jam"];
 $status = $_GET["status"];

 $query = "SELECT * FROM tb_antrian WHERE tanggal_antrian='$tanggal_antrian' AND jam_antrian='$jam' AND status='$status'";

 $result = mysqli_query($conn, $query);

 $array = array();

 while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "resultstatusAntrian" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "data tidak ditemukan"));
?>