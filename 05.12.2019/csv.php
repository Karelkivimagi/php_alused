<?php
$allikas = 'tootajad.csv';
$minu_csv = fopen($allikas, 'tootajad') or die('Ei leia faili!');
$rida = fgetcsv($minu_csv, filesize($allikas),';');
var_dump($rida);
fclose($minu_csv);