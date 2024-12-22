<?php
// Soal c: Menggunakan do-while loop untuk menampilkan angka 30, 27, 24, ..., 0
echo "Soal c: \n";
$nilai_c = 30;
do {
    echo $nilai_c . " ";
    $nilai_c -= 3; 
} while ($nilai_c >= 0);
echo "\n";
?>