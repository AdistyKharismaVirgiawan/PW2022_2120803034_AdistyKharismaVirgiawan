<?php 
$mahasiswa = ["Joni", "123456", "Sistem Informasi","joni@gmail.com"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
    
    
  </ul>
</body>
</html>