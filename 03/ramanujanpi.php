<?php
    function fakt($a)
    {
        for ($b = 1;$a >= 1;$a--)
            $b *= $a;
        return ($b);            
    }    
    for ($k = 0; $k <= 10000; $k ++)
    {
        $s += ((1103 + 26390 * $k) * fakt($d)) / ((fakt($k)** 4) * 396 ** (4 * $k));
    }
    $pi = 9801/(2*sqrt(2)*$s);
    echo ($pi);
?>
