<?php

$a=1;
$b=10;
$c=100;
echo "ini adalah for loop \n";
for ($a=1;$a<=10;$a++){
	echo "for looping angka ke-$a \n";
}
echo"\n\n";
echo "ini adalah while loop \n";
while ($b<=20){
	echo "while looping angka ke-$b \n";
	$b++;
}
echo"\n\n";
echo "ini adalah do while loop \n";
do {
	echo "do while looping angka ke-$b \n";
	$c++;
}while ($c<=105);
?>