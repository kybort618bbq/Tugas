<?php
$koneksi = mysqli_connect("localhost", "root", "" , "dbmahasiswa");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi datatabase gagal : " . mysqli_connect_error();
}