<?php

$nilai=85;

if ($nilai >=86 & $nilai <=100) {
    echo "nilai A sangat bagus";
} elseif ($nilai >=76 & $nilai <=85) {
    echo "nilai b bagus";
}
elseif ($nilai >=66 & $nilai <=75) {
    echo "nilai c cukup";
}
elseif ($nilai >=0 & $nilai <=65) {
    echo "nilai D cukup";
} else {
    echo "nilai di luar rata-rata"; 
}

?>
    