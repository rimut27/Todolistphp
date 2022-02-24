<?php
$bilang = 1;
echo "goto dengan while do \n\n";


end:
echo "kembbali";
while (true){
	echo "$bilang \n";
	$bilang ++;
	if ($bilang > 15){
goto end;
}
}	