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
            '<br> milles on lihaks: ' .     $this -> liha.
            '<br> milles on saiaks: ' .     $this -> sai.
            '<br> milles on lisand 1:' .    $this -> lisand1.
            '<br> milles on lisand 2:' .    $this -> lisand2.
            '<br> milles on lisand 3:' .    $this -> lisand3.
            '<br> milles on lisand 4:' .    $this -> lisand4
            ;
    }
}

class TervislikBurger extends Burger{

    public $sai = 'Tavaline sai';
    public $tervislikLisand1 = 'juust';
    public $tervislikLisand1Hind = 0.20;
    public $tervislikLisand2 = 'Hapukurk';
    public $tervislikLisand2Hind = 1;

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
            '<br> milles on lihaks: ' .     $this -> liha.
            '<br> milles on saiaks: ' .     $this -> sai.
            '<br> milles on lisand 1:' .    $this -> lisand1.
            '<br> milles on lisand 2:' .    $this -> lisand2.
            '<br> milles on lisand 3:' .    $this -> lisand3.
            '<br> milles on lisand 4:' .    $this -> lisand4.
            '<br> Milles on tervislik lisand 1::' . $this -> tervislikLisand1.
            '<br> Milles on tervislik lisand 2: ' . $this -> tervislikLisand2
            ;
    }

}

class LuxBurger extends burger{

}
// anna burgeritele omadused
$argiBurger = new burger();
$kahekihine = new burger();
$tavaTervislikBurger = new TervislikBurger();

$kahekihine -> nimetus = 'TopeltBurger';

$kahekihine -> lisand1 = 'Salat';
$kahekihine -> lisand1Hind = '0.20';
$kahekihine -> lisand2 = 'ketšup';
$kahekihine -> lisand2Hind = '0.30';
$kahekihine -> lisand3 = 'Peekon';
$kahekihine -> lisand3Hind = '0.50';
$kahekihine -> lisand4 = 'Lisa sai';
$kahekihine -> lisand4Hind = '0.45';

echo '<h1> tava burger </h1>';
echo $argiBurger -> MidaTeTellisite();
echo '<br> See maksis:' . $argiBurger -> BurgerSumma();

echo '<br> <h1>spetsiaalsete omadusetega tava burger</h1>';
echo $kahekihine -> MidaTeTellisite();
echo '<br> Mis maksis: '. $kahekihine -> BurgerSumma();



echo '<hr>';
