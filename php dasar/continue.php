<?php 
$b=1;
echo "ini adalah continue \n\n";
for ($b=1; $b<=100;$b++){
	if ($b %2 ==0){
		continue;
	}echo "aku adalah $b \n";
}
?>