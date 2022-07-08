<?php

function valoresInteiros($valor1, $valor2)
{
    $soma = $valor1 + $valor2;

    if ($soma < 0) {
        return 0;
    }

    return $soma;
}

$valor1 =-9;
$valor2 = 6;

echo valoresInteiros($valor1 , $valor2);


