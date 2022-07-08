<?php

function numeroInteiro($numeroInteiro1, $numeroInteiro2)
{
    if ($numeroInteiro1 % $numeroInteiro2 == 0) {
        return true;
    } else {
        return false;
    }
}


$numeroInteiro1 = 200;
$numeroInteiro2 = 100;

if (numeroInteiro($numeroInteiro1, $numeroInteiro2)) {
    echo "sao divisiveis";
} else {
    echo "Não são divisíveis";
}
