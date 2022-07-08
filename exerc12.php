<?php

$ano = 2020;
$dia = 22;
$mes = 5;

function numeroInteiro($ano, $dia, $mes)
{
    if ($ano < 1900 and $ano > 2022) {
        return false;
    }else{
       return true;
    }

    if($mes < 1 && $mes > 12){
        return false;
    }else{
        return true;
    }

    if($dia < 1 && $dia > 31){
        return false;
    }else{
        return true;
    }


}
print_r(numeroInteiro($ano, $dia, $mes));





