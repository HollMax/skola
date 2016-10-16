<?php
function prvocinitele($n){
$p = array();
$x = 2;
for (;$x <= $n;){
   for (;$n % $x;$x++){}   
   if ($x == $n){
     break;
     }
   $n = $n / $x;
   $p[] = $x;  
   }
$p[] = $n; 
return $p;}
$a=10;
$b=12;
$c=prvocinitele($a);
$d=prvocinitele($b);
//print_r($c);
//print_r($d);
$result = array_intersect($c,$d);
print_r($result);
?>


