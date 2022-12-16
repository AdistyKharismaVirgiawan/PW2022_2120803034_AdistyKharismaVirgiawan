<?php


require 'Function.php';
$disneymovies = query("SELECT * FROM disneymovies");



if (isset($_POST["cari"])) {
  $disneymovies = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Profile</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="profil">
        <a href="user.php"> User </a>
      </div>

      <h2>Disney Movies</h2>
    </div>

    <div class="cari">
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
      </form>
    </div>

    <table>
      <tr>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Tiket</th>
        <th>Studio</th>
        <th>Pukul</th>
      </tr>

      <?php foreach ($disneymovies as $disneymovies) : ?>
        <tr>
          <td>
          <img src="img/<?= $disneymovies["gambar"]; ?>" width="60" height="80"> 
          </td>
          <td><?= $disneymovies["Nama"]; ?></td>
          <td><?= $disneymovies["Tiket"]; ?></td>
          <td><?= $disneymovies["Studio"]; ?></td>
          <td><?= $disneymovies["Pukul"]; ?></td>
        </tr>
      <?php endforeach; ?>

    </table>

  </div>
</body>

</html>