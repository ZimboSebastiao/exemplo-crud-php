<?php
// Importando o script de coneção
// require_once garante que a importação é feita somente uma vez.
require_once "conecta.php";

// Usada em fabricantes/visualizar.php
function lerFabricantes(PDO $conexao){
    $sql =  "SELECT * FROM fabricantes ORDER BY nome";

    try {
        
        // Método prepare():
        // Faz uma preparação/pré-config do comando SQL e guarda em memoria (variavel consulta)
        $consulta = $conexao->prepare($sql);
    
        // Método execute():
        //Executa o comando no SQL no banco de dados
        $consulta->execute();
    
        // Método fetchAll():
        // Busca todos os dados da consulta como um array associativo.
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    } catch (Exception $erro) {
        die("Erro".$erro->getMessage());
    }

   return $resultado;
}

$dados = lerFabricantes($conexao);
var_dump($dados);