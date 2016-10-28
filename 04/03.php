<?php
$pole = array(3, 1, 2, 0, 5, 6, 4, 8, 9, 7);
for ($a = 0, $min = 0, $max = 0; $a < count($pole); $a++) {
    if ($min > $pole[$a]) {
        $min = $pole[$a];
    }
    if ($max < $pole[$a]) {
        $max = $pole[$a];
    }
}
echo ("nejmenší prvek v poli je $min a největší je $max");
?>
