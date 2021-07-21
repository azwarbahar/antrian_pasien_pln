<?php 
 require_once '../koneksi.php';

 $username = $_GET["username_user"];
 $password = $_GET["password_user"];
 $ray = array();
 $query = "SELECT * FROM tb_pasien WHERE username_user='$username'";
 $sql = mysqli_query($conn, $query);
 if ($sql){
    $row_pass = mysqli_fetch_assoc($sql);
    if (password_verify($password, $row_pass["password_user"])) {
            $ray[]=$row_pass;
    }
    echo json_encode($ray);
    mysqli_close($conn);
 }

?>