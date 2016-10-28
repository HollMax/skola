<?php
$pole = array(3, 1, 2, 0, 5, 6, 4, 8, 9, 7);
$n = 10;
$res = "bylo tu, není tu";
for ($a = 0, $min = 0, $max = 0; $a < count($pole); $a++) {
    if ($pole[$a] == $n) {
        $res = $a;
    }
}
echo($res);
?>
