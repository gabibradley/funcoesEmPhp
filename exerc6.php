<?php

function notaDeumAluno($nota1, $nota2)
{
    if ($nota1 < 7) {
        return false;
    }
    if ($nota2 < 7) {
        return false;
    }

    $soma = $nota1 + $nota2;

    if ($soma >= 19) {
        return true;
    } else {
        return false;
    }




    //0 é igual false;
    //1 é igual a true;




}


$nota1 = 20;
$nota2 = 4;

echo notaDeumAluno($nota1, $nota2);
