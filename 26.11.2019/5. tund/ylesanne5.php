<?php

$minuSynnipaev = strtotime("12 Oktoober ".date('1999'));
$temaSynnipaev = strtotime("11 November ".date('1980'));
$vahe = $temaSynnipaev - $minuSynnipaev; // kui vahe on negatiivne - tema on vanem, kuna minu synna on hiljem
// sekundite arv aastas on 60 sekundid minutis * 60 minutid tunnis * 24 tundi * 30 päev * 12 kuud
$vaheAastates = (int)($vahe / (60 * 60 * 24 * 30 * 12));
if($vahe < 0){
    echo 'Tema on vanem kui mina ';
} else {
    echo 'Mina olen vanem kui tema ';
}
echo abs($vaheAastates).' aasta võrra<br>';
