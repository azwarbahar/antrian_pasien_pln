<?php
require_once '../koneksi.php';

 $nama_pasien = $_GET["nama_pasien"];
 $status = $_GET["status"];

 $query = "SELECT * FROM tb_antrian WHERE nama_pasien='$nama_pasien' AND status = '$status' ORDER BY id_antrian DESC";

 $sql = mysqli_query($conn, $query);

 $ray = array();
 while ($row = mysqli_fetch_array($sql)) {
        array_push($ray, array(
            "kode_antrian"=>$row['kode_antrian'],
            "nama_pasien"=>$row['nama_pasien'],
            "tanggal_antrian"=>$row['tanggal_antrian'],
            "jam_antrian"=>$row['jam_antrian'],
            "status"=>$row['status']
        ));
 }

 echo json_encode($ray);
 mysqli_close($conn);


?>