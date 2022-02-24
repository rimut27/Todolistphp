<?php 

function faktor (int $a):int {
    $b = 1;
    for ($c = 1 ; $c <= $a ; $c++ ) {
       $b  *= $b;
    } 
    return $b;
}
var_dump(faktor(2));

function fator (int $a):int {
    if ($a == 1) {
        return 1;
    }else {
        return $a * fator($a - 1);
    }
}
var_dump (fator(10));


function fato (int $a) {
    if ($a == 1) {
      echo "dadah";
    }else {
      echo "loop-$a \n";
        fato($a - 1);
    }
}

fato(10000);