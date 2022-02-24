<?php

// global scope

$nama = "Riyadi Muttaqin";

function say (){
    global $nama;
    echo $nama  .PHP_EOL ;
}
say();

//local
function buatnama() {
    $buat = "Riyadi Muttaqin"; 
    echo $buat .PHP_EOL;
}
buatnama();


//GLOBAL Variabel


//static
function increment() {
    static $con= 2;
    echo "conter : $con \n";
    $con ++;
}
increment();
increment();
increment();
increment();
increment();
increment();
increment();
increment();
increment();