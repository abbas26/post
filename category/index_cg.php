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
								<li><a class="active" href="../category/index_cg.php" >Category</a></li>
								<li><a href="../item/index_itm.php">Item</a></li>
								<li><a href="../order/index_or.php">Order</a></li>
				 </ul>
	</div>
	<div class="table" >
		<div class="add"><ul> <li><a href="tambah_cg.php">Input Data</a></li></ul></div>
		<div id="customers"> 
			<table>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
				<?php
				include 'koneksi_cg.php';
				$nomor  = 1;
				$sql    = "select * from category";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)) {
						echo "
						<tr>
							<td>".$nomor++."</td>
							<td>".$row['name']."</td>
							<td>
								<a href='edit_cg.php?id=".$row['id']."'>Edit</a>
								<a href='delete_cg.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
							</td>
						</tr>
						";
					}
				}
				?>
			</table>
		</div><!--table-->
</div>
	</body>
</html>
