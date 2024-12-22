<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>kolom 1</th>
            <th>kolom 2</th>
            <th>kolom 3</th>
            <th>kolom 4</th>
            <th>kolom 5</th>
        </tr>
        <?php
        $jumlah_baris = "15";
        $jumlah_kolom = "5";

        echo "looping menggunakan for : </br>";
        for ($i =1; $i <= $jumlah_baris; $i++) {
            echo "<tr>";

            for ($j =1; $j <= $jumlah_kolom; $j++) {
                echo "<td>Baris $i, kolom $j</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>