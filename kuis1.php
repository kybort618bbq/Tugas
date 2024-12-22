<?php
$total_bayar = 500000;
if ($total_bayar >= 500000){
    $diskon = 50;
} elseif ($total_bayar >= 100000) {
    $diskon = 10;
} elseif ($total_bayar >=50000) {
    $diskon = 5;
} else {
    $diskon = 0;
}

$total_setelah_diskon = $total_bayar - ($total_bayar * $diskon / 100 );

echo "total diskon dan pembayaran : <br>";
echo "Anda mendapat diskon $diskon% <br>";
echo "Total bayar setelah diskon: Rp " . number_format($total_setelah_diskon, 2);
?>
