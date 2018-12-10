<?php
include 'koneksi_or.php';
$table_number  = $_POST['table_number'];
$item          = $_POST['item'];
$qty           = $_POST['qty'];
$sql1= "select price from item where id = $item";
$result1 		= mysqli_query($connect,$sql1);
$row1    		= mysqli_fetch_assoc($result1);
$total         = $qty * $row1['price'];

function discount($total){
	if($total > 100000){
	return "20%";
	} else {
	return "-";
	}
}
$discount=discount($total);

function after_discount($total){
			$discount = 0.2 * $total;
			$after_discount = $total - $discount;	
	if($total > 100000){
	return $after_discount;
	} else {
	return $total;
	}
}
$hasildiskon=after_discount($total);

$sql = "INSERT INTO orderr (table_number, item_id, qty, total, discount, after_discount) VALUES ('$table_number' , '$item' , '$qty', '$total', '$discount', '$hasildiskon')";
mysqli_query($connect,$sql);
header('location:index_or.php');
?>
