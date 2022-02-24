<?php

require_once __DIR__. "/../logic/remove.php";
require_once __DIR__. "/../help/input.php";

function viewremovetodolist () {
    echo "Menghapus agenda" .PHP_EOL;
    $hapus = masukan("masukan nomor agenda yang akan dihapus (x untuk mermbatalkan)" .PHP_EOL);
    if ($hapus == "x") {
        echo "batal menghapus" ;
    }else{
        $index = removeodolist($hapus);
        if($index) {
            echo "anda telah menghapus agenda ke- $hapus " .PHP_EOL;
        }else{
            echo "anda gaggal meenghapus ".PHP_EOL;
        }
    }
}