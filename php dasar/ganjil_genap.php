<?php
$angka = 11;

echo "ganjil / genap \n";

echo $angka;
echo "\n";
if ($angka %2 ==0) {
	echo "ini adalah genap";
}else if  ($angka %2 ==1) {
	echo "ini adalah ganjil";
}else {
	echo "tidak diketahui";
};
?>