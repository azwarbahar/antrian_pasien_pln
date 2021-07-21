<?php 

require_once '../koneksi.php'; 

$jam_antrian = $_GET["jam_antrian"];
$tanggal_antrian = $_GET["tanggal_antrian"];
$query = "SELECT * FROM `tb_antrian` WHERE jam_antrian ='$jam_antrian' AND tanggal_antrian = '$tanggal_antrian' ORDER BY id_antrian DESC LIMIT 1";
 $result = mysqli_query($conn, $query);

 $array = array();

 while ($row = mysqli_fetch_array($result)) {
    array_push($array, array(
        "kode_antrian"=>$row['kode_antrian']
    ));
}

 echo ($result) ?
 json_encode(array("kode" => 1, "resultLastDone" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "data tidak ditemukan"));
?>