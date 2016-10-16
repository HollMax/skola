<?php
$n = 30;
echo "<h2>číslo $n</h2><br />";
$y = sqrt($n);
for ($x = 2; $x <= $y; $x++):
 if (!($n%$x)):
  $p = 1;
  echo "je delitelne $x<br />";
//    echo "není prvočíslo ";
//    break;
    
   else:
//   echo "není dělitelné $x<br />";
//   echo "je prvočíslo ";
 endif;
endfor;
if ($p==1):
  echo "není prvočíslo ";
 else:
  echo "je prvočíslo";
endif;
?>
