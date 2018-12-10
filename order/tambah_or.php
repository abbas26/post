<html>
	<head>
		<title>Tambah Data</title>
		
	</head>
	<body>
		<form action="proses_tambah_or.php" method="POST">
	<table>
	<tr>
		<td><label for="table_number">Table Number</label></td>
		<td>:</td>
		<td><input type="text" name="table_number" id="table_number">
	</tr>
	<tr>
		<td><label for="item">Item</label></td>
		<td>:</td>
		<td>
			<select name="item">
				<option value="">-- Silahkan Pilih --</option>
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
		</td>
	</tr>
	<tr>
		<td><label for="qty">Qty</label></td>
		<td>:</td>
		<td><input type="text" name="qty" id="qty"></td>
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
