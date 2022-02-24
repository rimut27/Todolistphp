<?php
echo "ini adalah if statement \n";

$nilai = 10;
$absen = 10;
$a = 2;
$total = 0;
$total+=$nilai;
$total+=$absen;
$total/=$a;
var_dump ($total);

if ($total >= 80){
	echo "selamat datang";
}else{echo "dadah";}