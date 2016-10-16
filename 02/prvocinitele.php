<?php
$n = 50000000000000;
$p = array();
$x = 2;
/*
   $p[] = $x;
   $n = $n/$x;
   for (;$n%$x;$x++){
     if ($n=$x){
     break;
     }
   }
   if ($n=$x){
     break;
   }     
 }
*/
for (;$x <= $n;){
//   $p[] = $x;
//   $n = $n / $x;
//   echo $x;
//   echo $n;
   for (;$n % $x;$x++){
//     echo $x;
//     echo $n;
     }
   
   if ($x == $n){
     break;
     }
   $n = $n / $x;
   $p[] = $x;  
   }
$p[] = $n; 
print_r ($p);
?>
