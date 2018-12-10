<?php
include 'koneksi_itm.php';

$ID           = $_POST['id'];
$category	  = $_POST['category'];
$nama         = $_POST['nama'];
$price		  = $_POST['price'];
$status		  = $_POST['status'];

$sql = "UPDATE item SET category_id = '$category', name = '$nama', price = '$price', status = '$status' WHERE id = '$ID' ";
mysqli_query($connect,$sql);
header('location:index_itm.php');

?>