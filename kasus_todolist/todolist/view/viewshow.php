<?php

require_once __DIR__. "/../model/model.php";
require_once __DIR__. "/../logic/show.php";
require_once __DIR__. "/../view/viewadd.php";
require_once __DIR__. "/../view/viewremove.php";
require_once __DIR__. "/../help/input.php";

function viewshowtodolist () {
    
     while (true) {
        showtodolist();
        echo "\n\nMenu \n";
        echo "1. Tambah \n";
        echo "2. Hapus \n";
        echo "3. Keluar \n";

        //input
        $pilih = masukan("pilihan anda ");

        if ($pilih == "1" ){
            viewaddtodolist();
        }else if ($pilih == "2"){
            viewremovetodolist();
        }else if ($pilih == "3") {
            break;
        }else {
            echo "salah pilih \n";
        }  
     }
         echo "\n\n Sampai Jumapa";
}