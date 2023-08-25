<?php 
require_once "../src/funcoes-fabricantes.php";

// Obtendo e sanatizando o valor vindo do parametro de url (link dinamico)
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$fabricante = lerUmFabricante($conexao, $id);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualização</title>
</head>
<body>
    <p><a href="../index.php">Home</a></p>
    <h1>Fabricantes | SELECT/UPDATE</h1>
    <hr>

    <form action="" method="post">
        
    <!-- Compo oculto usado apenas para registro no formulário do id do fabricante que está sendo visualuizado -->
        <input type="hidden" name="id" value="<?=$fabricante['id']?>">
        <p>
            <label for="nome">Nome:</label>
            <input value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome" required>
        </p>
        <button type="submit" name="atualizar">Atualizar fabricantes</button>
    </form>
    <p><a href="visualizar.php">Voltar</a></p>

</body>
</html>