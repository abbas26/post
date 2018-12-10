<?php
include 'koneksi_cg.php';
$ID           = $_POST['id'];
$nama           = $_POST['nama'];
$sql = "update category set name = '$nama' Where id = '$ID' ";
mysqli_query($connect,$sql);
header('location:index_cg.php');
?>
