<?php

$array = [1,2,5,3,4,9,7,6,8,10];

var_dump(array_map(fn($array)=> $array * 10, $array));
var_dump($array);
sort($array);
rsort($array);
var_dump(array_keys($array));
var_dump(array_values($array));
var_dump(shuffle($array));

?>