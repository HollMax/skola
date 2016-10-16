<?php
$n = array (3, 1, 2, 0, 5, 6, 4, 8, 9, 7);
for ($a = 1; $a <= count($n); $a++){
  print_r ($n);
  echo "<br />";
  for ($i = 0; $i < count($n) - 1; $i++){
    if ($n[$i] > $n[$i + 1]){
      $tmp = $n[$i];
      $n[$i] = $n[$i + 1];
      $n[$i + 1] = $tmp;
    }
  }
}
print_r ($n);
/*
for ($p=0;$p<count($n);$p++):
  $q[$p] = $n[count($n)-$p-1];
endfor;
*/ 
echo "<br />";      
print_r ($q);
?>