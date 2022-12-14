<?php 

$conn = mysqli_connect("localhost", "root", "", "disneymovies");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$Tiket = htmlspecialchars($data["Tiket"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$Studio = htmlspecialchars($data["Studio"]);
	$Pukul = htmlspecialchars($data["Pukul"]);

	
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO disneymovies
				VALUES
			  ('', '$Nama', '$Tiket', '$Studio', '$Pukul', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM disneymovies WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$Nama = htmlspecialchars($data["Nama"]);
	$Tiket = htmlspecialchars($data["Tiket"]);
	$Studio = htmlspecialchars($data["Studio"]);
	$Pukul = htmlspecialchars($data["Pukul"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	
	

	$query = "UPDATE disneymovies SET
				Nama = '$Nama',
				Tiket = '$Tiket',
				Studio = '$Studio',
				Pukul = '$Pukul',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM disneymovies
				WHERE
			  Nama LIKE '%$keyword%' OR
			  Tiket LIKE '%$keyword%' OR
			  Studio LIKE '%$keyword%' OR
			  Pukul LIKE '%$keyword%'
			";
	return query($query);
}













?>