<?php

echo "Kalkulator \n";
echo "masukan angka pertama = ";
$a = fgets(STDIN);
echo "masukan angka kedua = ";
$b = fgets(STDIN);

echo "Pilihan \n";
echo "1. Ditambah \n";
echo "2. Dikurang \n";
echo "3. Dikali \n";
echo "4. Dibagi \n";
$pilih = fgets(STDIN);
switch ($pilih){
    case "1";
    $c = $a + $b;
    echo $a + $b = $c;
    break;
    case "2";
    $d = $a - $b;
    echo $d = $a - $b;
    break;
    case "3";
    $e = $a * $b;
    echo $e = $a * $b;
    break;
    case "4";
    $f = $a / $b;
    echo $f = $a / $b;
    break;
    default;
    echo "salah pilihan";
} 