<?php
function baseconvert($number, $basebase, $tobase=10){
    $array = str_split($number);
    $array = array_reverse($array);
    foreach ($array as $key => $val){
        $return += $val * ($basebase ** $key);
        }
    return $return;
}
$number = 1001000; 
$base = 2;
echo (baseconvert($number, $base, 10));
?>
