<?php
function f($x){
    return $x ** 2 - 20;
    }
function mpi($x1, $x2, $ac = 1){
    if (f($x1) > f($x2)){
        $x = $x1;
        $x1 = $x2;
        $x2 = $x;
        }
    for ($round = 0; abs(f(($x1 + $x2) / 2)) > (($x1 + $x2) / 2) * ($ac / 100) && $round < 1000;$round++){
        if (abs(f($x1)) > abs(f($x2))){
            $x1 = ($x1 + $x2) / 2;
            }
        else {
            $x2 = ($x1 + $x2) / 2;
            }
        }
    return ($x1 + $x2) / 2;
    }
echo mpi (0, 100, 0.01);
?>
