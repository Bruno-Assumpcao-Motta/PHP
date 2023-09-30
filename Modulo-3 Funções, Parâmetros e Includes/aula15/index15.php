<?php
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

$x = somar(1, 4);
$y = somar(5, 8);
$w = somar($x, $y);

echo "TOTAL: ".$w;