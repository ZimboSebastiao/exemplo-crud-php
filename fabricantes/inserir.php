<?php 


if( isset($_POST['inserir']) ){
    // Capturando o valor digitado do nome e sanatizando
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserção</title>
</head>
<body>
    <h1>Fabricantes | Insert</h1>
    <hr>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>
        <button type="submit" name="inserir">Inserir fabricantes</button>
    </form>

</body>
</html>