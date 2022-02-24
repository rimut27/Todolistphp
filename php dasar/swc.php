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
switch ($ipk){
	case 3.5;
		echo "Nilai anda adalah A ";
		break ;
	case 3.4;
		echo "Nilai anda adalah B ";
		break ;
	case 3.0;
		echo "Nilai anda adalah C ";
		break ;
	default;
		echo "anda harus mengulang";
}
?>