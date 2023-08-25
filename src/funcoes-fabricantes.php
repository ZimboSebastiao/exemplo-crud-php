<?php
require_once "conecta.php";

// Usada em fabricantes/visualizar.php
function lerFabricantes(PDO $conexao){
    $sql =  "SELECT * FROM fabricantes ORDER BY id";

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
}  // Fim lerFabricantes

// $dados = lerFabricantes($conexao);
// var_dump($dados);


// Usada em fabricantes/inserir.php
function inserirFabricante(PDO $conexao, string $nomeFrabicante){
    // :qualquerCoisa -> Isso indica um "named parameter" (parâmetro nomeado)
    $sql = "INSERT INTO fabricantes(nome) VALUES(:nome)";

    try {
        
        $consulta = $conexao->prepare($sql);
        
        // bindValue() -> permite vincular o valor existente no parâmetro nomeado (:nome) à consulta que será executada.
        // É necessário indicar qual é o parâmetro (:nome), de onde vem o valor ($nomeFabricante) e de que tipo é (PDO::PARAM_STR)
        $consulta->bindValue(":nome", $nomeFrabicante, PDO::PARAM_STR);
        $consulta->execute();

    } catch (Exception $erro) {
        die("Erro ao inserir: ".$erro->getMessage());
    }

} // Fim inserirFabricante