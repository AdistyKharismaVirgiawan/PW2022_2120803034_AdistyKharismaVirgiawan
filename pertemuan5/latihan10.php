<?php 
$mahasiswa =
[
  [
    "nama" => "Joni",
    "nim" => "123456",
    "jurusan" => "Sistem Informasi",
    "email" => "joni@gmail.com",

  ],

  [
    "nama" => "Budi",
    "nim" => "321654",
    "jurusan" => "Sistem Informasi",
    "email" => "budi@gmail.com",
  ]
  ]; ?>

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
    <?php foreach ($mahasiswa as $mhs) : ?>
      <ul>
        <li>Nama :<?= $mhs ["nama"];  ?></li>
        <li>nim :<?= $mhs ["nim"];  ?></li>
        <li>jurusan :<?= $mhs ["jurusan"];  ?></li>
        <li>email :<?= $mhs ["email"];  ?></li>
      </ul>
      <?php endforeach; ?>
  </body>
  </html>