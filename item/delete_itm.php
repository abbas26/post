S<?php
include 'koneksi_itm.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM item WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index_itm.php');
?>
