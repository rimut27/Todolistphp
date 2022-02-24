<?php
echo "ini adalah numberic :  \n\n" ;
echo "ini adalah binery :\n " ;
var_dump(0b111);
echo "ini adalah decimal :\n " ;
var_dump(1234);
echo "ini adalah oktal :\n" ;
var_dump(01234);
echo "ini adalah heksadecimal :\n" ;
var_dump(0x111);
echo "ini adalah heksadecimal :\n\n\n" ;
echo "ini adalah float biasaa :\n" ;
var_dump(1.111);
echo "ini adalah float bakal dikali 10 :\n" ;
var_dump(1.111e1);
echo "ini adalah float bakal dikali 0.1 :\n" ;
var_dump(1.111e-1);
echo 'aku adalah string 1 ';
echo "\n";
echo "aku adalah string 1\n";
echo <<<EE
 
aku adalah heredoc
You can quickly import your favorites, 
passwords,
and other browser 
data to Microsoft Edge.
just type edge://settings/importData in the Microsoft Edge address bar to get started.

EE;
echo <<<'EE'
 
aku adalah nerodoc

You can quickly import your favorites, 
passwords,
and other browser 
data to Microsoft Edge.
just type edge://settings/importData in the Microsoft Edge address bar to get started.

EE;