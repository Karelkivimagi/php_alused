<?php
//Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
//Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***
$roppSonad = array('noob', 'kurat'); // roppsõnade massiiv
$lause = $_GET['lause']; // kasutaja sisend
$lause = strtolower($lause); // teisendame kõik väikesteks tähtedeks
// iga roppsõna kohta, mis meie massiivis on
foreach ($roppSonad as $roppSona) {
    // moodustame asendussõna vastava pikkusega
    $asendus = '';
    for ($kord = 0; $kord < strlen($roppSona); $kord++) {
        $asendus .= '*';
    }
    // otsime, millisest indeksist hakkab pihta roppsõna meie lause sees
    $roppSonaIndex = strpos($lause, $roppSona, 0);
    // kui sõna on leitud
    if ($roppSonaIndex !== false) {
        // teeme vastav asendus
        $lause = substr_replace($lause, $asendus, $roppSonaIndex, strlen($roppSona));
    }
}
// teeme tagasi lause algava suure tähega
$lause = ucfirst($lause);
// väljastame lause
echo $lause;
echo '<hr>';