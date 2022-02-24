<?php

function Sum(int $pertama, int $kedua):float
{ 
   $total = $pertama * $kedua / 3;
    return $total;
}
$total = Sum(10,20);
sum(10,20);
var_dump($total);

function nilai(int $angka) : string
{

    if ($angka >= 90){
        return "A";
    }elseif ($angka <= 80){
        return "B";
    }else {
        return "Z";
    }
}

$hasil = nilai(90);
var_dump ($hasil) ;

$halsi = nilai(75);
var_dump($hasil);

$hasil = nilai(0);
var_dump ($hasil) ;

?>