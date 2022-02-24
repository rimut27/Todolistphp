<?php

echo "ini adalah array 1 \n";

$a = array (12);
$b = array ("12");

var_dump ($a==$b);
var_dump ($a===$b);
var_dump  ($a[]= "13");
$b[]= 14;
var_dump($b);