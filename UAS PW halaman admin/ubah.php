<?php
require 'Function.php';

$id = $_GET["id"];

$disneymovies = query("SELECT * FROM disneymovies WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah playlist Disney Movies</title>
</head>
<body>
	<h1>Ubah playlist Disney Movies</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $disneymovies["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $disneymovies["gambar"]; ?>">
		<ul>
			<li>
				<label for="Nama">Nama : </label>
				<input type="text" name="Nama" id="Nama" required value="<?= $disneymovies["Nama"]; ?>">
			</li>
			<li>
				<label for="Tiket">Tiket: </label>
				<input type="text" name="Tiket" id="Tiket" value="<?= $disneymovies["Tiket"]; ?>">
			</li>
			<li>
				<label for="Studio">Studio :</label>
				<input type="text" name="Studio" id="Studio" value="<?= $disneymovies["Studio"]; ?>">
			</li>
			<li>
				<label for="Pukul">Pukul:</label>
				<input type="text" name="Pukul" id="Pukul" value="<?= $disneymovies["Pukul"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $disneymovies['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>