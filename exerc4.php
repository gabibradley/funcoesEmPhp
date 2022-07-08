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



function numeroInteiro($numeroInteiro)
{
    for ($i = $numeroInteiro; $i > 0; $i--) {
        $primo = verificaPrimo($i);
        if($primo == true){
            return $i;
        }
    }
}


echo numeroInteiro(9);
