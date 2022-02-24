<?php

function helo ($nama, $last ="siapa coba" ,$hobi){
    echo "helo $nama\n$last\n$hobi \n";
}

helo("Riyadi", "Muttaqin", "main game");

function hitung (int $p, int $q){
    
    $total = $q * $q;
    echo "total dari $p + $q = $total \n";
}

    hitung(10,10);
    hitung("200","14000");
    hitung(true, false);

function sum (...$jum){
    $jumlah = 0;
   foreach ($jum as $jum) {
       $jumlah += $jum;
   }
   echo "total ". implode( ',', $jum). "total $jumlah \n" ;
} 
sum(1, 2, 3, 4, 5);
?>

