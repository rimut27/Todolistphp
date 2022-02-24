<?php

$kata = function (string $na ){
    echo "helo $na \n";
};
$kata ("riyadi");
$kata ("Muttaqin");



function katakan (string $nama, $filter){
    $finame = $filter ($nama);
    echo "goodbye $finame \n";

}
katakan( "Riyadi", function (string $nama):string {
   return strtoupper ($nama);
    return strtolower ($nama);
} );


$awal = "riyadi";
$akhir = "muttaqin";

$sayhelo = function () use ($awal, $akhir) {
        echo "helo $awal $akhir \n";
};
$sayhelo ();

$pertama = 10;
$kedua = 10;
$hasil = $pertama * $kedua;

$result = function () use ($hasil, $pertama, $kedua) {
    echo "hasi dari $pertama dikali $kedua sama dengan $hasil";
};
$result ();

?>