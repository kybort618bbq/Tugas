<?php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Dhini",
        "005" => "Erwin"];
        // Untuk memasukkan value, kita harus membuat key yang mempresentasikan valuenya.
        // tanda "=> diartikan sebagai merujuk
        // "key" => "value"

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array assosciative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>