<?php
// Soal d: Menggunakan do-while loop untuk menampilkan angka 10, 8, 6, 4, 2, 0
echo "Soal d: \n";
$nilai_d = 10;
do {
    echo $nilai_d . " ";
    $nilai_d -= 2; 
} while ($nilai_d >= 0);
echo "\n";
?>