<?php

//inculude bahan 
require_once __DIR__. "/model/model.php";
require_once __DIR__. "/logic/add.php"; 
require_once __DIR__. "/logic/remove.php"; 
require_once __DIR__. "/logic/show.php"; 
require_once __DIR__. "/view/viewadd.php";
require_once __DIR__. "/view/viewremove.php";
require_once __DIR__. "/view/viewshow.php";

echo "aplikasi apa yang Agenda hari ini \n" ;
viewshowtodolist()

?>