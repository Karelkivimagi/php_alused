<?php
$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';
echo ucfirst(strtolower($tekst));
echo '<hr>';

// teksti pikkus

// strlen() – loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid
// str_word_count() – loeb kokku sõnade arv

$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);			//34
echo '<br>';
echo str_word_count($tekst);	//6

echo '<hr>';

//Teksti kärpimine

//Muutuja algusesse ja lõppu on sattunud ülearused tühikud ja tabulaatorid.
// Sellise teksti kuvamisel eemaldatakse kõik automaatselt ja ei olegi nagu probleemi.
// Probleem tekib, kui see kirjutada näiteks andmebaasi.
// Aga, et tulemus oleks hetkel kenasti silmaga näha, siis lisan kõik <pre>…</pre> siltide vahele.

$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";

$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");	//oman should soften but not weake


// kui kasutaja üritab saata teksti, mis sisaldab HTML ja PHP koodi, siis on juhtumeid, kus tahad sellest lahti saada.
// Sellest aitab lahti saada strip_tags() funktsioon.

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst); 	//Experience is the teacher of fools


$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>'); 	//<b>Experience</b> is the teacher <br>of fools
echo '<hr>';


//tekst kui massiiv

//PHP käsitleb teksti kui massiivi, kus esimene märk on indeksiga 0 jne.

$tekst = 'All thinking men are atheists';
echo $tekst[0]; 				//A
echo '<br>';
echo $tekst[4]; 				//t


$tekst = 'All thinking men are atheists';
echo substr($tekst, 3, 5);		//thin
echo '<br>';
echo substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);		//atheist



$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 1));		//Array ( [0] => All [1] => thinking [2] => men [3] => are [4] => atheists )




//Tekstist otsimine


// Viimase osana vaatame kuidas leida tekstist teatud sõnu ning pärast seda kuidas soovitud asendada.
// Otsimiseks strpos() funktsiooni, mis lubab meil lisada kolm parameetrit:

//tekst, kust otsitakse
//tekst, mida otsitakse
//nihe ehk mitmendast märgist otsimist alustatakse.

$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst, $otsitav, 0);	//4
echo $leia_tekstist;

//Meil on siis tekst, kust otsime näiteks sõna ‘in’ ja alustame algusest. Tulemuseks saame indeksi väärtuse ‘4’, kuna ‘Happiness’ sõnas on see täitsa olemas. Kui nihet muuta, siis leiab see kenasti järgmise asukoha.

...
$leia_tekstist = strpos($tekst, $otsitav, 6);	//10
...
//Järgmine samm selle koodi puhul võiks olla see, et see leiab tekstist kõik otsitavad. Arvatavasti võiks kasutada selleks mingisugust tsüklit, mis väljastab soovitud indeksi ja muudab nihet. Nihke arvutamisel tuleb siis arvesse võtta juba leitud indeksi väärtust ja otsitava sõna pikkus.

$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$nihe = 0;
while($leia_tekstist = strpos($tekst, $otsitav, $nihe)){	//4 10 13 48
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}
//Nagu näha, leiab see kenasti kõik sõna asukohad.





//Teksti asendamine


//Teksti asendamiseks vaatame kahte funktsiooni. Esimesena kasutame substr_replace() funktsiooni, mis vajab nelja parameetrit:

//tekst, kust otsida
//asendatav tekst
//arv, mis tähistab indeksit, kuhu asendatav tekst lisatakse
//arv, mis tähistab asendatava sõna pikkuse
//Loome lause, kus soovime asendada sõna ‘papa’ sõnaga ’emme’.

$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
//Nagu näha määrasime koha, kuhu uus sõna läheb (4) ning mitu tähte nö. ära kustutatakse (4). Samas saab need arvud ka ju dünaamiliseks teha.

$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav = 'papa';
$nihe = 0;
$asenduse_algus = strpos($tekst, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst, $asendus, $asenduse_algus, $asenduse_markide_arv);
//Loomulikult võid kasutada eelpool õpitud tsüklit, kui asendatavaid sõnu on tekstis rohkem. Kindla sõna asendamiseks kasutame str_replace(), mis tahab saada vähemalt kolme parameetrit:

//otsitav tekst
//asendus tekst
//tekst, kust otsida
$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = 'lehm';
$asenda = 'koer';
echo str_replace($otsi, $asenda, $tekst);
//Selle funktsiooni juures on tore see, et otsitavad ja asendatavad võivad olla massiivis.

$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = array('lehm', 'saba', 'taga');
$asenda = array('koer', 'sarv', 'ees');
echo str_replace($otsi, $asenda, $tekst);