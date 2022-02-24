<?php

$nama = "Riyadi muttaqin \n";
$namalain = &$nama;
$namalain = "Ririn Renita \n";
$namal = &$nama;
$namal = "RR \n";
echo $nama;

function urut(int &$value) {
    $value ++;
}

$cont = 1;
urut ($cont);
echo $cont .PHP_EOL;

function &say (){
    static $sa = 1000;
    return $sa;
}

$a = &say();
$a = 2000;

$b = &say();
echo $b;