<html>
	<head>
		<title>Index</title>
<style>
body{
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.menu ul{
	 float: left;
	 list-style-type: none;
    margin: 20px 20px 20px 20px;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
	font-weight: bold;
}
.menu li a {
	 list-style-type: none;
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
.menu li a.active {
    background-color: #4CAF50;
    color: white;
}
.menu li a:hover:not(.active) {
    background-color: #ddd;
    color: black;
}
/*menu*/
.add ul{
	 float: left;
	 list-style-type: none;
    margin: 20px 20px 20px 0px;
    padding: 0;
    width: 10%;
    background-color: #4CAF50;
    border: 3px outset #ddd;
}
.add li a {
	 list-style-type: none;
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
	text-align: center;
	font-weight: bold;
}
.add li a:hover:not(.active) {
    background-color: #ddd;
    color: black;
}
#customers {
	float: left;
    width: 80%;
	text-align: center;
}
#customers table {
    border-collapse: collapse;
width: 100%;

}
#customers table td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
	text-align: center;
}
#customers table tr:nth-child(even){background-color: #f2f2f2;}
#customers table tr:hover {background-color: #ddd;}
#customers table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	text-align: center;
}
</style>
	</head>
	<body>
			<div class="menu">
				<ul>
								<li><a href="../category/index_cg.php" >Category</a></li>
								<li><a href="../item/index_itm.php">Item</a></li>
								<li><a class="active" href="../order/index_or.php">Order</a></li>
				 </ul>
			</div>
			<div class="table" >
			<div class="add"><ul> <li><a href="tambah_or.php">Input Data</a></li></ul></div>
			<div id="customers"> 
			<table>
				<tr>
				<th>No</th>
				<th>Table Number</th>
				<th>Item</th>
				<th>Qty</th>
				<th>Total</th>
				<th>Discount</th>
				<th>After Discount</th>
				<th>Action</th>
			</tr>
			<?php
			include 'koneksi_or.php';
			$nomor  = 1;
			$sql    = "SELECT item.id, orderr.id as urut, table_number, item.name as name, qty, total, discount, after_discount
						FROM orderr INNER JOIN item 
						ON item.id=orderr.item_id";
			$result = mysqli_query($connect,$sql);
			function rupiah($total) {
			$proses = "Rp ".number_format($total,2,',','.');
			return $proses; 
}
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['table_number']."</td>
						<td>".$row['name']."</td>
						<td>".$row['qty']."</td>
						<td>".rupiah($row['total'])."</td>
						<td>".$row['discount']."</td>
						<td>".rupiah($row['after_discount'])."</td>
						<td>
							<a href='edit_or.php?id=".$row['urut']."'>Edit</a>
							<a href='delete_or.php?id=".$row['urut']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
