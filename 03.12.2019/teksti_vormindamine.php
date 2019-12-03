<?php
$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);

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