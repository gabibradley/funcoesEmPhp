<?php
function valorInteiro($valorA, $valorB, $valorC)
{

    if ($valorA > $valorB && $valorB > $valorC) {
        return true;
    } else {
        return false;
    }
}

$valorA = 110;
$valorB = 90;
$valorC = 30;

if (valorInteiro($valorA, $valorB, $valorC)) {
    echo "true";
} else {
    echo "false";
}

