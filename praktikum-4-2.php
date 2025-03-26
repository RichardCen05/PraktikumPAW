<?php

function jumlahkan($a, $b) {
    return $a + $b;
}

$hasil1 = jumlahkan(10, 5);
$hasil2 = jumlahkan(7, 3);

echo "Hasil penjumlahan 10 + 5 = $hasil1\n<br>";
echo "Hasil penjumlahan 7 + 3 = $hasil2\n\n<br>";

function panjangString($teks) {
    return strlen($teks);
}


$string1 = "Hello World!";
$string2 = "Praktikum PHP";

$panjang1 = panjangString($string1);
$panjang2 = panjangString($string2);

echo "Panjang string \"$string1\" adalah $panjang1 karakter\n<br>";
echo "Panjang string \"$string2\" adalah $panjang2 karakter\n";
?>