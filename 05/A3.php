<?php
function doduchodu($rok = 1970, $mes = 1, $den = 1, $hod = 0, $min = 0, $sec = 0){ //formát zadávání data narození je den, měsíc, rok, hodina, minuta, sekunda
    $left = mktime($hod, $min, $sec, $mes, $den, $rok + 75) - time();
    return $left;
    }
$den = 13;
$mes = 9;
$rok = 1998;
$left = doduchodu($rok, $mes, $den)/60;
if ($left > 0){
    echo ("do důchodu ti zbývá $left minut");
    }
else{
    echo("máš nárok na důchod");
    }
?>
