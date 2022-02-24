<?php
echo "Ini adalah increment \n";
$a = 10;
$b = $a++;
$c = ++$a;

var_dump ($a);
var_dump ($b);
var_dump ($c);

echo "Ini adalah decrement \n";
$d = 11;
$e = $d--;
$f = --$d;
var_dump($d);
var_dump($e);
var_dump($f);
?>