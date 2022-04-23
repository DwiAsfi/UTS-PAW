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
		include "Koneksi.php";

		$id = $_GET['id'];

		$sql = "DELETE FROM tbl_121 WHERE id_121 = '$id'";
		$hasil = mysqli_query($koneksi, $sql);
		if (!$hasil) { ?>
			<h2>Eksekusi Gagal</h2>
		<?php }
		else { ?>
			<h2>Data Telah Berhasil Dihapus<br></h2>
			<a href="data.php" button type="button">Lihat Daftar</a>
		<?php }
		?>
	</div>
</body>
</html>