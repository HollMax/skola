<?php
function getposition($value, $array){
    foreach ($array as $key => $val){
        if ($value === $val){
            return $key;
            }
        }
    }
function anumtonum($values){
    $alph = range("a", "z");
    $nums = array_map("strval", range(0, 9));
    $array = array_merge($nums, $alph);
    foreach ($values as $key => $val){
        $values[$key] = getposition($val, $array);
        }
    return $values;
    }
function baseconvert($number, $basebase, $tobase = 10){
    $array = str_split($number);
    $array = anumtonum($array);
    $array = array_reverse($array);
    foreach ($array as $key => $val){
        $return += $val * ($basebase ** $key);
        }
    return $return;
    }
$number = a37334; 
$base = 16;
echo (baseconvert($number, $base, 10));
?>
