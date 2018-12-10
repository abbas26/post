<?php
include 'koneksi_itm.php';
$category	  = $_POST['category'];
$nama         = $_POST['name'];
$price		  = $_POST['price'];
$status		  = $_POST['status'];


$sql ="INSERT INTO item (category_id, name, price, status) VALUES ('$category','$nama','$price','$status')";
mysqli_query($connect,$sql);
header('location:index_itm.php');
?>
