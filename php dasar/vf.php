<?php
echo "ini adalah variabel fungsi/methode \n\n";

function foo (){
    echo "haloo \n";
}

function bar (){
    echo "hai \n";
}

$var1 = "foo";
$var1 ();

$var2 = "bar";
$var2 ();

function say(string $nama, $filter ){
    $full = $filter($nama);
    echo "halo $full  \n";
}

function babi (string $nama): string
{
    return "$nama babi ";
}
say ("Riyadi", "babi");
say ("Riyadi", "strtolower");
say ("Riyadi", "strtoupper");

