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
$jmena[3]="Hanu�";
$jmena[]="Ondra";
print_r($jmena);

echo "<br />";
$sach = array();
$sach[c][1]="St�elec";
$sach[c][2]="P�ec";
$sach[h][2]="P�ec";
print_r($sach);
?>