<?php 
    echo "Menampilkan Nilai Array Menggunakan While"."<br>";
    $angka = array(76,56,79,88,74,97,39,48,57);

    $i = 0;
    while ($i <= count($angka)) {
        echo $angka[$i]."<br>";
        $i++;

       
    }
?>