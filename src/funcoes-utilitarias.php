<?php

$formataPreco = function(float $valor){

    $precoFormatado = "R$ ".number_format($valor, 2, ",", ".");
    return $precoFormatado;

}; 

?>
