<h2>Cyklus for</h2>
<?php
for($i=1;$i<=3;$i++)
 echo "$i. Nebudu poslouchat!<br />";

 echo"<br />";
$jmena = array ();
$jmena[] = "Lojza";
$jmena[] = "Franta";
$jmena[] = "Pepa";
 for ($i=0;$i<count($jmena);$i++):
  echo "<div>";
  echo $jmena[$i];
  echo "</div>";
 endfor;
?>
<h2>Cyklis while</h2>
<?php
$i=0;
while ($i<count($jmena)):
echo $jmena[$i];
$i++;
endwhile;
?>
<h2>Cyklus do-while</h2>
<?php
$i=0;
do{
 echo $jmena[$i];
 $i++;
}while ($i<count($jmena));
?>
<h2>Cyklus foreach</h2>
<?php
foreach($jmena as $k=>$v):
 echo "$v je pod indexem $k<br />";
endforeach;
?>