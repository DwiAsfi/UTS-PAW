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

		$nama = $_POST['nama_121'];
		$email = $_POST['email_121'];

		$sql = "INSERT INTO tbl_121 VALUES (null, '$nama', '$email')";
		$hasil = mysqli_query($koneksi, $sql);
		if (!$hasil) { ?>
			<h2>Eksekusi Gagal</h2>
			<?php }
			else { ?>
				<h2>Data Telah Berhasil Ditambahkan<br></h2>
				<a href="data.php" button type = "button">Lihat Daftar</a>
				<?php }
				?>
	</div>
</body>
</html>