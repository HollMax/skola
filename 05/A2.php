<?php
function lookfor($array, $val = 1){
    $ret = 0;
    foreach ($array as $x){
        if ($x == $val){
            $ret ++;
            }
        }
    return $ret;
    }
$array = array(3, 1, 2, 0, 5, 6, 4, 8, 9, 7, 1, 2, 4, 2);
$a = lookfor($array, 2);
echo ($a);
?>
