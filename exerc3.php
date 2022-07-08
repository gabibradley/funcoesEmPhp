<?php

function raizQuadradaDaSomadosQuadrados($valor1, $valor2)
{
    $soma = $valor1 * $valor1 + $valor2 * $valor2;
    $raizQuadrada = sqrt($soma);
    return $raizQuadrada;
}

$valor1 = 3;
$valor2 = 5;

echo raizQuadradaDaSomadosQuadrados($valor1, $valor2);


