<?php 
require_once "../src/funcoes-fabricantes.php";

// Obtendo e sanatizando o valor vindo do parametro de url (link dinamico)
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    deletarFabricante($conexao, $id);
    header("location:visualizar.php");
?>
