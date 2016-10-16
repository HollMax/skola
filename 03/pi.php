 <?php 
$i = 0;
$t = 2;
for ($e = time(); time() <= ($e + $t); $i++) { 
		//$pi += (4*pow(-1, $i)/(2*$i+1));
		$pi += ((4 - 8 * ($i % 2)) / (2 * $i + 1));
		//echo("$i - $pi<br>");
	}
	echo("$i - $pi<br>");
?>
