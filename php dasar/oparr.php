<?php
echo "berikut ini adalah operator array \n";
$nama = [
	"depan" => "Riyadi",
	"belakang" => "Muttaqin"
];
$alamat = [
	"jalan" => "Raya Mande",
	"Rt/Rw" => "02/02",
	"Desa" => "Cikadut",
	"kecamatan" => "Cimenyan",
	"kabupaten" => "Bandung"
];
var_dump ($nama+$alamat);
?>
