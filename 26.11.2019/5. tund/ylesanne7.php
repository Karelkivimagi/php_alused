<?php
$kell = date('H');
if($kell >= 8 and $kell < 13){
    echo 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
    echo 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
    echo 'Tere õhtust!';
}