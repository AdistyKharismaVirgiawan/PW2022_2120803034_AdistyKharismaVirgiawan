<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modul 2 - Latihan 1</title>
  
</head>
<body>
  <table border="1" cellpadding="3" cellspacing="0" >
  
    <tr style="background-color: lightgreen;">
   
      <th>Kolom 1</th>
      <th>Kolom 2</th>
      <th>Kolom 3</th>
      <th>Kolom 4</th>
      <th>Kolom 5</th>

    </tr>

   
<?php

for ($i=1; $i <=15; $i++) { 
  
  echo "<tr>"; 
for ($j=1; $j<=5; $j++) {
  echo "<td style='background-color:yellow;'> Baris $i Kolom ".$j."</td>";
}
echo "</tr>";
}

?>

<?php 
if ($i % 2 == 0) {$color= "#f00";
}
else {$bgcolor="#111";
}

echo "</td>";
$i++;
echo "</td>";
echo "</table>";
 ?>



</table>
</body>
</html>