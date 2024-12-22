<?php

$host       = "localhost";
$Username   = "root";
$password   = "";
$database   = "dbmahasiswa"

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
    echo "database terkoneksi";
}else{
    echo "data";
}
?>