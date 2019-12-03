<?php
//lisab vormist saadud andmed muutujasse
$nimi = $_GET['t1'];

$nimi2 = ucfirst(strtolower($nimi));
echo 'Tere '.$nimi2. '!<br>';
?>