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


function numeroPrimo($numeroInteiro)
{
    for ($i = 2; $i < $numeroInteiro; $i++) {
        if ($numeroInteiro % $i == 0) {
            return 0;
        }
    }
    return 1;
}
