<?php

require_once "../model/model.php";
require_once "../view/viewremove.php";
require_once "../logic/show.php";
require_once "../logic/add.php";

addtodolist("pokokna");
addtodolist("5 taun deui");
addtodolist("kudu kabeli");
addtodolist("mobil");
showtodolist();
viewremovetodolist();
showtodolist();