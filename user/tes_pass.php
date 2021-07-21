<?php
require_once '../koneksi.php'; 

$pass = $_GET["pass"];
$password = password_hash($pass, PASSWORD_DEFAULT);
echo "$password";
$query = "INSERT INTO tes_pass values('','$pass','$password')";
mysqli_query($conn, $query);
?>