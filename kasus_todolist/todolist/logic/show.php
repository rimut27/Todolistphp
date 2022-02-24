<?php

//tampilan 

function showtodolist () {
    global $todolist;

    echo "\n\nApa yang akan anda lakukan \n\n" ; 

    foreach ($todolist as $number => $value) {
       echo "$number => $value \n"  ;
    }
}