<?php
function array_randomise($pole = array()){
    $res = array();
    for ($a = count($pole) - 1; $a >= 0; $a--) {
        $c = random_int (0, $a);
        $res[] = $pole[$c];
        /*
        $pole[$c] = false;
        $pole = array_filter($pole);
        */
        unset ($pole[$c]);
        $pole = array_values($pole);
        /*
        print_r($pole);
        echo ("<br>");
        print_r($res);
        echo ("<br>");
        */
    }
    return ($res);
}
$n = array(3, 1, 2, 0, 5, 6, 4, 8, 9, 7);
print_r(array_randomise($n));
?>
