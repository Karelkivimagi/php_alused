<?php

$paevaNumber = date('N');
$paev = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev',
);
foreach ($paev as $number=> $nimetus){
    if($number == $paevaNumber){
        echo $paev[$number];
    }
}
echo '<hr>';