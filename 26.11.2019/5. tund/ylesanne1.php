<?php
$sp = mktime(12,31,0,03,20,2013); //mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg)
echo date('d.m.Y G:i', $sp);	//29.10.1969
?>