S<?php
include 'koneksi_or.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM orderr WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index_or.php');
?>