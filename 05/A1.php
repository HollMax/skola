<?php
function ctverec($a){
    $array = array();
    $array[] = 4 * $a;
    $array[] = $a ** 2;
    $array[] = (2 * ($a ** 2)) ** 0.5;
    return $array;
    }
$a = 2;
$pole = ctverec($a);
echo ("čtverec o straně $a má obvod $pole[0], obsah $pole[1] a jeho úlopříčka činí $pole[2]")
?>
