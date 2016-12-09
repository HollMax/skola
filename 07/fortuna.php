<?php
function multarray($array){
    $return = 1;
    foreach ($array as $value){
        $return *= $value;
        }
    return $return;
    }
function eff($array){
    $bet = array();
    foreach ($array as $value){
        $bet[] = multarray($array / $value);
        }
    return (array_sum($bet)/multarray($array));
    }
$array = array(3.1, 4, 4.95, 6.9, 9.2, 11.5);
//echo (/*100 * (1 - */eff($array));
?>
