<?php

echo ("ini adalah Arrow funiction \n") ;
$satu = "Riyadi";
$dua = "muttaqin";
$tiga = "Ririn";
$empat = "Renita";
$lim = 100;
$en = 100;
$hasil = $lim + $en;
$sum = $lim - $en;
$result = $lim * $en;
$jadi = $lim / $en;

$halo = fn ()  => "halo bangsat $satu $dua \n";
$olah = fn () => "kamu adalah milik ku $tiga $empat \n";
$tamp = fn () => " hasi dari $lim ditambah $en adalah $hasil \n";
$tampi = fn () => " hasi dari $lim dikurang $en adalah $sum \n";
$tampil = fn () => " hasi dari $lim dikali $en adalah $result \n";
$tampk = fn () => " hasi dari $lim dibagi $en adalah $jadi \n";


echo $halo ();
echo $olah ();
echo $tamp ();
echo $tampi ();
echo $tampil ();
echo $tampk ();
?>