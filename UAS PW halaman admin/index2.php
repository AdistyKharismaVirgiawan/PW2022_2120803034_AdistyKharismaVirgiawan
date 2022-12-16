<?php 

$conn = mysqli_connect("localhost", "root", "", "disneymovies");

$result = mysqli_query($conn, "SELECT * FROM disneymovies");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Disney Movies</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Tiket</th>
		<th>Studio</th>
		<th>Pukul</th>
	</tr>

	<?php $i = 1; ?>
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">ubah</a> 
			<a href="">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["Nama"]; ?></td>
		<td><?= $row["Tiket"]; ?></td>
		<td><?= $row["Studio"]; ?></td>
		<td><?= $row["Pukul"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	
</table>

</body>
</html>