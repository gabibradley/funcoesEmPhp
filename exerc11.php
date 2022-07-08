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


function numeroInteiro($numeroN)
{

    $contador = 0;
    for ($i = 2; $i < 100; $i++) {
        $primo = verificaPrimo($i);
        if ($primo == true) {
            $contador++;
        }
        if($contador == $numeroN){
            return $i;
        }
    }
}

$numeroN = 20;
echo numeroInteiro($numeroN);

