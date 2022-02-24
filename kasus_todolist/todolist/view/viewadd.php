<?php

require_once __DIR__. "/../model/model.php";
require_once __DIR__. "/../help/input.php";
require_once __DIR__. "/../logic/add.php";

function viewaddtodolist () {
    echo "MENAMBAH AGENDA \n";

    $tambah = masukan("\n Silahkan tambah agenda anda (tekan x untuk membatalkan) \n");

    if ($tambah == "x") {
        echo "\nbatal menambahkan \n";
    }else {
        addtodolist($tambah);
        echo "\n Berhasi ditambahkan \n";
    }

}