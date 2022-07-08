<?php

function numeroInteiro($numeroInteiro)
{
  $numeros = str_split($numeroInteiro, 1);
  $soma = 0;
  for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
  }
  return $soma;
}


$numeroInteiro = 180;
echo numeroInteiro($numeroInteiro);


//str_split - divide a string em pedaços;
//acessar o valor em um indice $numeros[$i];

