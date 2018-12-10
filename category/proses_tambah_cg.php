<?php
include 'koneksi_cg.php';
$nama         = $_POST['nama'];

$sql = "INSERT INTO category (name) VALUES ('$nama')";
mysqli_query($connect,$sql);
header('location:index_cg.php');
?>
