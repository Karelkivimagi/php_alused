<?php
$jargmineAasta = date('Y')+1;
$minuSynniKuuPaev = strtotime("12 Oktoober 1999");
$minuSynnipaevJargmiselAastal = strtotime("12 Oktoober ".$jargmineAasta);
// mitu aastat olen vana?
$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynniKuuPaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
    echo $jargmineAasta.' sul on juubel';
} else {
    echo $jargmineAasta.' sul pole juubelit';
}
echo '<hr>';