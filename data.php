<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS PAW</title>
</head>
<body>
	<div>
		<h1 style="text-align: center;">Daftar Data</h1>
		<a href="form_data.php" button type="button"> + Tambah Data</a>
		<table>
			<thead>
				<tr>
					<td><b>ID</b></td>
					<td><b>Nama</b></td>
					<td><b>Email</b></td>
					<td><b>Action</b></td>
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$sql = "SELECT * FROM tbl_121";
			$hasil = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($hasil)) {
			?>
			<tr style="text-align: center;">
				<td><?= $row['id_121'];?></td>
				<td><?= $row['nama_121'];?></td>
				<td><?= $row['email_121'];?></td>
				<td>
					<div>
						<div>
							<a href="form_edit.php?id=<?= $row['id_121']?>" button type="button"> Edit </a>
						</div>
						<div>
							<a href="delete.php?id=<?= $row['id_121']?>" button type="button"> Delete </a>
						</div>
					</div>
				</td>
			</tr>
		<?php }
		?>
		</table>
	</div>
</body>
</html>