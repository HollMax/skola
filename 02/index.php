<?php
/*
$a = 1;
$b = "1";

if ($a==$b) echo "Rovnost ";
 else echo "Nerovnost ";
 
if ($a===$b) echo "Rovnost ";
 else echo "Nerovnost ";
*/
$jmena = array("Franta", "Honza", "Pepa");

echo $jmena[2];
echo "<br />";
print_r($jmena);
echo "<br />";
$jmena = array(2 => "Franta", "Honza", "Pepa");
print_r($jmena);
$jmena = array(1 => "Franta", 5 => "Honza", 100 =>"Pepa");
$jmena[3]="Hanuš";
$jmena[]="Ondra";
print_r($jmena);

echo "<br />";
$sach = array();
$sach[c][1]="Støelec";
$sach[c][2]="Pìšec";
$sach[h][2]="Pìšec";
print_r($sach);
?>