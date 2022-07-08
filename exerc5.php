<?php

function verificaPrimo($numero)
{
    $divisor = 0;
    for ($count = 2; $count < $numero; $count++) {
        if ($numero % $count == 0) {
            $divisor++;
        }
    }
    if ($divisor == 0) {
        return true;
    } else {
        return false;
    }
}

function contaPrimos($numeroInteiro1, $numeroInteiro2)
{
    $contador = 0;
    for ($i = $numeroInteiro1; $i < $numeroInteiro2; $i++) {
        if (verificaPrimo($i)) {
            $contador++;
        }
    }
    return $contador;
}
echo contaPrimos(25,37); 