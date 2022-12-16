<?php 
require 'Function.php';

if( isset($_POST["submit"])) {

  if( tambah($_POST) > 0 ) {
    echo "
      <scrip> 
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </scrip>  
    "; 
  } else {
    echo "
      <scrip>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
      </scrip>"; 
    
  }
}
?>

<!DOCTYPE html>
<head>
  <title>Playlist Disney Movies</title>
</head>
<body>
  <h1>Tambah Disney Movies</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" required>
      </li>
      <li>
        <label for="Tiket">Tiket : </label>
        <input type="text" name="Tiket" id="Tiket">
      </li>
      <li>
        <label for="Studio">Studio : </label>
        <input type="text" name="Studio" id="Studio">
      </li>
      <li>
        <label for="Pukul">Pukul : </label>
        <input type="text" name="Pukul" id="Pukul">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li>
        <button type="submit" name="submit">Tambah</button>
      </li>
    </ul>

  </form>
  
</body>
</html>