<?php
$a=1;
$s=2;
echo "ini adalah break \n";
while (true) {
	echo "ini adalah $a \n";
	$a++;
	if($a>10){
		break ;
	}
}
echo"\n\n";
echo "ini adalah continue \n";
for ($s=2;$s<=10;$s++){
		if ($s % 2 ==1){
			continue;
		}
	echo "ini adalah $s \n";
}
?>