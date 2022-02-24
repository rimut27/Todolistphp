<?php

$isi = "saya is funiction";
$angka = 1234;
$desimal = 0.12;
$larik = [1,2,3,4, "aku"];
var_dump(is_string($isi));
var_dump(is_bool($isi));
var_dump(is_float($desimal));
var_dump(is_int($angka));
var_dump(is_callable($isi));
var_dump(is_array($larik));

?>