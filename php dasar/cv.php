<?php
echo "ini adalah \n\n\n";
define ("ini", "aku adalah constanta \n",);
echo ini ;

$var = "ini adalah variabel\n"; 
echo $var;
echo  <<< ada
ini 
adalah
string 
ada;
echo "\n\n ini adalah int \n";
echo "binary";
var_dump (0b11);
echo "oktal";
var_dump (0123);
echo "desimal";
var_dump (1234);
echo 'heksa desimal';
var_dump (0x123);
echo "\n\n ini adalah float ";
var_dump(1.3);
echo "float dikali 100 ";
var_dump(1.3e2);
echo "float dibagi 100 ";
var_dump(1.3e-2);
echo "\n\n aku adalah boolean";
var_dump(true);
var_dump (false);
echo "aku adalah array ";
$r = array(1,2,3,4,5);
var_dump ($r);
$w = [6,7,8];

var_dump ($w[]=9.9);
?>