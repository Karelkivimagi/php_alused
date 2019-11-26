<?php
$now = time(2019-11-26);
$your_date = strtotime("2020-06-24");
$datediff = $your_date - $now;

echo round($datediff / (60 * 60 * 24)). ' päeva Jaanipäevani kuupäevast 26.11.2019';