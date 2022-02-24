<?php

require_once "../model/model.php";
require_once "../logic/add.php"; 
require_once "../logic/remove.php"; 
require_once "../logic/show.php"; 

addtodolist("Riyadi");
addtodolist("Muttaqin");
addtodolist("Ririn");
addtodolist("Renita");

showtodolist();
removeodolist(2);
showtodolist();
removeodolist(3);
showtodolist();
$s = removeodolist(3);
var_dump($s);
showtodolist();