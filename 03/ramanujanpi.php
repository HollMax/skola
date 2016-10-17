<?php
    $s = 0;
    for ($k = 0; $k <= 1000; $k ++)
    {
        $d = $k * 4;
        $s = $s + ((1103 + 26390 * $k) * gmp_fact($d)) / ((gmp_fact($k)** 4) * 396 ** (4 * $k));
    }
    $pi1 = 2 * sqrt(2) / 9801 * $s;
    $pi = $pi1 ** (-1);
    echo ($pi);
?>
