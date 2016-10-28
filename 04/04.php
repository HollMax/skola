<?php
function quicksort($pole = array()){
    if(count($pole) <= 1){
        return $pole;
    }
    else{
        $pivot = $pole[0];
        $mene = array();
        $vice = array();
        for ($i = 1; $i < count($pole); $i++){
            if ($pole[$i] < $pivot){
                $mene[] = $pole[$i];
            }
            else{
                $vice[]= $pole[$i];
            }
        }
        return array_merge(quicksort($mene), array($pivot), quicksort($vice));
    }
}
print_r(quicksort($pole = array(3, 1, 2, 0, 5, 6, 4, 8, 9, 7)));
?>
