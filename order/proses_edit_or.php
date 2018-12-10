<?php
include 'koneksi_or.php';
$ID            = $_POST['id'];
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

$sql = "UPDATE orderr SET table_number = '$table_number', item_id = '$item', qty = '$qty', total = '$total', discount = '$discount', after_discount = '$hasildiskon' Where id = '$ID' ";
mysqli_query($connect,$sql);
header('location:index_or.php');
?>
