<?php
//Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
//Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);
foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));
$nimiJaPerenimi = substr($nimiJaPerenimi, $tyhikuIndeks+1);
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ');
$perenimi = strtolower(substr($nimiJaPerenimi,$tyhikuIndeks+1));
$email = $nimi.'.'.$perenimi.'@khk.ee';
echo $email;