<html>
	<head>
		<title>Edit Data</title>

	</head>
	<body>
		<?php
		include 'koneksi_or.php';
		$ID    		= $_GET['id'];
		$sql1		= "SELECT * FROM orderr WHERE id=$ID";
		$result1 	= mysqli_query($connect,$sql1);
		$row1    	= mysqli_fetch_assoc($result1);
		$cek		= $row1['item_id'];

		$sql2		= "SELECT * FROM item WHERE id=$cek";
		$result2	= mysqli_query($connect, $sql2);
		$row2		= mysqli_fetch_assoc($result2);

		?>
		<form action="proses_edit_or.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Table Number : <br>
			<input type="text" name="table_number" value="<?php echo $row1['table_number']; ?>"><br>
			Item : <br>

			<select name="item">
				<option value="<?php echo $row1['item_id']; ?>"><?php echo $row2['name']; ?></option>
				<?php
				include 'koneksi_or.php';

				$sql3		= "SELECT * FROM item";
				$result3	= mysqli_query($connect, $sql3);

				if(mysqli_num_rows($result3)>0) {
					while ($row3 = mysqli_fetch_assoc($result3)) {
						echo "<option value=".$row3['id'].">".$row3['name']."</option>";
					}
				}

				?>
			</select><br>

			Qty : <br>
			<input type="text" name="qty" value="<?php echo $row1['qty']; ?>"><br>
			<br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
