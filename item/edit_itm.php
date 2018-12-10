<html>
	<head>
		<title>Edit Data</title>


	</head>
	<body>
		<?php
		include 'koneksi_itm.php';

		$ID     	= $_GET['id'];
		$sql   	 	= "select * from item where id=$ID";
		$result	 	= mysqli_query($connect,$sql);
		$row    	= mysqli_fetch_assoc($result);
		$tampil 	= $row['category_id'];

		$sql2 		= "SELECT * FROM category WHERE id=$tampil";
		$result2	= mysqli_query($connect, $sql2);
		$row2 		= mysqli_fetch_assoc($result2);

		?>

		<form action="proses_edit_itm.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">

			Category : <br>
			<select name="category" id="category" class="select_drop">
				<option value="<?php echo $row['category_id']; ?>">
					<?php echo $row2['name']; ?>
				</option>
					<?php
					include 'koneksi_itm.php';

					$sql1 		= "SELECT * FROM category";
					$result1 	= mysqli_query($connect, $sql1);

					if (mysqli_num_rows($result1)>0) {
						while ($row1 = mysqli_fetch_assoc($result1)) {
							echo "<option value=".$row1['id'].">".$row1['name']."</option>";
						}
					} 
					 ?>
			</select><br>

			Name : <br>
			<input type="text" name="nama" value="<?php echo $row['name']; ?>"><br>

			Price : <br>
			<input type="text" name="price" value="<?php echo $row['price']; ?>"><br>

			Status : <br>
			<input type="radio" name="status" value="1" id="active" <?php if ($row['status'] == "1"){echo "checked";} ?>>
			<label for="active">Active</label>

			<input type="radio" name="status" value="0" id="non-active" <?php if ($row['status'] == "0"){echo "checked";} ?>>
			<label for="non-active">Non Active</label></td><br><br>

			<input type="submit" value="Submit">

		</form>
	</body>
</html>
