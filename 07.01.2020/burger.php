<?php


class Burger{

    public $nimetus = 'Hamburger';
    public $liha = 'Sealiha';
    public $sai = 'Tavaline sai';
    public $hind = 1;
    public $lisand1 = 'Peekon';
    public $lisand1Hind = 0.50;
    public $lisand2 = 'Tomat';
    public $lisand2Hind = 0.20;
    public $lisand3 = 'Juust';
    public $lisand3Hind = 0.20;
    public $lisand4 = 'Tšilli';
    public $lisand4Hind = 0.25;

    public function BurgerSumma(){
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind ;

    }

    public function MidaTeTellisite(){

        return  'Te tellisite: '.               $this -> nimetus.
            '<br> Liha: ' .     $this -> liha.
            '<br> Sai: ' .     $this -> sai.
            '<br> Lisand 1:' .    $this -> lisand1.
            '<br> Lisand 2:' .    $this -> lisand2.
            '<br> Lisand 3:' .    $this -> lisand3.
            '<br> Lisand 4:' .    $this -> lisand4
            ;
    }
}

class TervislikBurger extends Burger{

    public $sai = 'Must teraleib';
    public $nimetus = 'Tervislik burger';
    public $tervislikLisand1 = 'Lehtsalat';
    public $tervislikLisand1Hind = 0.20;
    public $tervislikLisand2 = 'Hapukurk';
    public $tervislikLisand2Hind = 0.30;
    public $lisand1 = 'sibul';
    public $lisand1Hind = 0.20;

    public function BurgerSumma(){
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> tervislikLisand1Hind +
            $this -> tervislikLisand2Hind;

    }
    public function MidaTeTellisite(){
        return  'Te tellisite: '.               $this -> nimetus.
            '<br> Liha: ' .     $this -> liha.
            '<br> Sai: ' .     $this -> sai.
            '<br> Esimene lisand:' .    $this -> lisand1.
            '<br> Teine lisand :' .    $this -> lisand2.
            '<br> Kolmas lisand:' .    $this -> lisand3.
            '<br> Neljas lisandlisand:' .    $this -> lisand4.
            '<br> Milles on tervislik lisand 1:' . $this -> tervislikLisand1.
            '<br> Milles on tervislik lisand 2: ' . $this -> tervislikLisand2
            ;
    }

}

class LuxBurger extends burger{

    public $sai = 'Teradega kukkel';
    public $liha = 'Veiseliha';
    public $nimetus = 'Luxburger';
    public $tervislikLisand1 = 'Lehtsalat';
    public $tervislikLisand1Hind = 0.20;
    public $tervislikLisand2 = 'Hapukurk';
    public $tervislikLisand2Hind = 0.30;
    public $lisand1 = 'Sibul';
    public $friikad = 'Friikartulid';
    public $jook = 'Coca-Cola';
    public $jookHind = 0.80;
    public $friikadHind = 1.20;
    public $lisand1Hind = 0.20;

    public function BurgerSumma(){
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> tervislikLisand1Hind +
            $this -> friikadHind +
            $this -> jookHind +
            $this -> tervislikLisand2Hind;

    }
    public function MidaTeTellisite(){
        return  'Te tellisite: '.               $this -> nimetus.
            '<br> Liha: ' .     $this -> liha.
            '<br> Sai: ' .     $this -> sai.
            '<br> Esimene lisand:' .    $this -> lisand1.
            '<br> Teine lisand :' .    $this -> lisand2.
            '<br> Kolmas lisand:' .    $this -> lisand3.
            '<br> Muu:' . $this -> friikad.
            '<br> Jook: ' . $this -> jook
            ;
    }

}
// anna burgeritele omadused
$argiBurger = new burger();
$kahekihine = new burger();
$tavaTervislikBurger = new TervislikBurger();
$tavaLuxBurger = new LuxBurger();

$kahekihine -> nimetus = 'TopeltBurger';

$kahekihine -> lisand1 = 'Salat';
$kahekihine -> lisand1Hind = '0.20';
$kahekihine -> lisand2 = 'ketšup';
$kahekihine -> lisand2Hind = '0.30';
$kahekihine -> lisand3 = 'Peekon';
$kahekihine -> lisand3Hind = '0.50';
$kahekihine -> lisand4 = 'Lisa sai';
$kahekihine -> lisand4Hind = '0.45';

echo '<h1> Tellimus </h1>';
echo $argiBurger -> MidaTeTellisite();
echo '<br> Kogu maksumus:' . $argiBurger -> BurgerSumma();
echo '<br> <hr><br>';
echo $kahekihine -> MidaTeTellisite();
echo '<br> Kogu maksumus: '. $kahekihine -> BurgerSumma();
echo '<br> <hr><br>';
echo $tavaTervislikBurger -> MidaTeTellisite();
echo '<br> Kogu maksumus: '. $tavaTervislikBurger -> BurgerSumma();
echo '<br> <hr><br>';
echo $tavaLuxBurger -> MidaTeTellisite();
echo '<br> Kogu maksumus: '. $tavaLuxBurger -> BurgerSumma();

echo '<hr>';
