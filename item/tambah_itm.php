<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_tambah_itm.php" method="POST">
	<table>
	<tr>
		<td><label for="category">Category</label></td>
		<td>:</td>
		<td>
		<select name="category" id="category" class="select_drop">
		<option value="">-- Pilih Kategori--</option>
		<?php 
			include "koneksi_itm.php";
			$sql  = "SELECT * FROM category";
			$result = mysqli_query($connect, $sql);
			if  (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<option value=",$row['id'].">".$row['name'],"</option>";
				}
			}
		?>
		</select></td>
		
	</tr>
	<tr>
		<td><label for="name">Name</label></td>
		<td>:</td>
		<td><input type="text" name="name" id="name"></td>
	</tr>
	<tr>
		<td><label for="price">Price</label></td>
		<td>:</td>
		<td><input type="text" name="price" id="price"></td>
	</tr>
	<tr>
		<td><label>Status</label></td>
		<td>:</td>
		<td><input type="radio" name="status" value="1" id="active">
		<label for="active">Active</label>
		<input type="radio" name="status" value="0" id="non-active">
		<label for="non-active">Non Active</label></td>
		
	</tr>
	<tr>	
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type="submit" value="submit"></td>
	</tr>
</table>
		</form>
	</body>
</html>
