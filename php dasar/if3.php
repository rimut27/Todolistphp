<?php

$ipk = 0;
$ip = 3;
$absen = 4;
$nama = "Riyadi Muttaqin";
define ("dibagi" , 2);

$ipk += $ip;
$ipk += $absen;
$ipk /= dibagi;

echo "hallo ".$nama ." nilai anda ". $ipk. "\n";
if ($ipk >= 3.5){
	echo "Nilai anda A";
}else if ($ipk < 3.5){
	echo "Nilai anda B";
}else if ($ipk < 3.0){
	echo "Nilai anda C";
}else if ($ipk < 2.0){
	echo "Nilai anda D";
}else if ($ipk <= 1.0){
	echo "Nilai anda E";
}else{
	echo "Anda harus mengulang";
}

?>