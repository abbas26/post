<html>
	<head>
		<title>Edit Data</title>

	</head>
	<body>
		<?php
		include 'koneksi_cg.php';
		$ID     = $_GET['id'];
		$sql    = "select * from category where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit_cg.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['name']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
