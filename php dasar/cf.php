<?php

echo "Ini adalah callback funniction " .PHP_EOL;

function katakan (string $ngaran, callable $pindai){
    $fullnam = call_user_func($pindai, $ngaran);
    echo "Halo $fullnam \n";

}

Katakan("Riyadi", function ($ngaran) {return strtoupper ($ngaran);});
katakan("Riyadi", fn($ngaran) => strtolower ($ngaran));
katakan ("iuyadi", "strtolower");
katakan ("Ryadi", "strtoupper");

?>