<?php

function valorReal($valor1, $valor2, $valor3)
{
    if ($valor2 > $valor1) {
        if ($valor2 > $valor3) {
            return $valor2;
        }
    }

    if ($valor1 > $valor2) {
        if ($valor1 > $valor3) {
            return $valor1;
        }
    }

    if ($valor3 > $valor2) {
        if ($valor3 > $valor1) {
            return $valor3;
        }
    }
}

$valor1 = 60;
$valor2 = 20;
$valor3 = 30;

echo valorReal($valor1, $valor2, $valor3);
