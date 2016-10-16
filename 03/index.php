<?php
function trojuhlenik($a=1,$b=1,$c=1){
  if ($a+$b>$c && $a+$c>$b && $b+$c>$a){
    return true;
  else
    return false;
  }
}
?>
