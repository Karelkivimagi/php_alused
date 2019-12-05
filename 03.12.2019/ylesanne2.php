<?php
// Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada.
// Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
// Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.

$sõna = 'stalker';



for ($indeks = 0; $indeks < strlen($sõna); $indeks++) {
    $symbol = strtoupper($sõna[$indeks]); // teisendame täht suureks
    echo $symbol . '.'; // väljastame koos punktiga
}
