<?php

$formataPreco = function(float $valor):string{

    $precoFormatado = "R$ ".number_format($valor, 2, ",", ".");
    return $precoFormatado;

}; 

function calcularTotal(float $valor, int $qtd):string{
    $total = $valor * $qtd;
    return $total;
}
?>
