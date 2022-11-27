<?php 
$nama = ["Ahmad", "Budi", "Chika","Dhini","Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Looping for array</title>
</head>
<body>
  <?php 
   for($i = 0; $i < count($nama); $i++) {



    echo "<li>$nama[$i]</li>";
   }
  
  
  ?>
</body>
</html>