<?php
    function fakt($a)
    {
        for ($b = 1;$a >= 1;$a--)
        {
            $b *= $a;
            //echo ("b$b");
            //echo ("a$a<br>");
        }
        return ($b);            
    }
    //$c = fakt(4);    
    //echo ("$c");
    $time = time();
    $a = fakt(7);
    $b = gmp_fact(699);
    $c = $a / $b;
    //echo (time()-$time);
    //echo (" - $c");  
    echo ($a);
    //echo ($b);
    ?>
