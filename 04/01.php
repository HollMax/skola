<?php
$rovnice = array();
$rovnice[a] = 1;
$rovnice[b] = 4;
$rovnice[c] = 4;
if ($rovnice[a] == 0) {
    echo ("toto není kvadratická rovnice");
}
else {
    $d = ($rovnice[b] ** 2) - (4 * $rovnice[a] * $rovnice[c]);
    echo ("D = $d<br>");
    if ($d < 0) {
        echo ("nemá řešení");
    }
    elseif ($d == 0) {
        $x = (0 - $rovnice[b]) / (2 * $rovnice[a]);
        echo ("kořen je $x");
    }
    else {
        $x1 = (0 - $rovnice[b] + sqrt($d)) / (2 * $rovnice[a]);
        $x2 = (0 - $rovnice[b] - sqrt($d)) / (2 * $rovnice[a]);
        echo ("kořeny jsou $x1 a $x2");
    }
}
        
?>
