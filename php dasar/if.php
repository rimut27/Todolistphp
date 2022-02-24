<?php

$ipk = 3;
$absen = 80;
if ($ipk=4 && $absen>=90 ) {
	echo "Nilai A";
}elseif ($ipk>=3 && $absen>=80) {
	echo "Nilai B";
}elseif ($ipk>=2 && $absen>=70) {
	echo "Nilai C";
}elseif ($ipk>=1 && $absen>=60){
	echo "Nilai D";
}else{
	echo "maaf anda di DO";
};
