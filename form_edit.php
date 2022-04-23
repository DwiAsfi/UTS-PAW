<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS PAW</title>
</head>
<body>
	<div>
		<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$sql = "SELECT * FROM tbl_121 WHERE id_121='$id'";
		$hasil = mysqli_query($koneksi, $sql);

		if (!$hasil) {
			echo "query salah";
		}
		?>

		<h1>Form Edit Daftar</h1>

		<?php
		while ($row = mysqli_fetch_array($hasil)) {
		?>
			<form method="post" action="update.php">
				<input type="hidden" name="id_121" value="<?php echo $row['id_121'] ?>"><br>
				<input type="text" name="nama_121" value="<?php echo $row['nama_121'] ?>"><br>
				<input type="text" name="email_121" value="<?php echo $row['email_121'] ?>"><br>
				<input type="submit" value="Update">
			</form>
		<?php }
		?>
	</div>
</body>
</html>