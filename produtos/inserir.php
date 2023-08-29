<?php require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Inserção</title>
</head>
<body>
    <h1>Produtos | Insert</h1> <p><a href="visualizar.php">Voltar</a></p>
    <hr>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input required  type="number" min="10" max="10000" step="0.01" name="preco" id="preco">
        </p>
        <p>
        <label for="quantidade">Quantidade:</label>
            <input required type="number" min="1" max="100" step="0.01" name="quantidade" id="quantidade">
        </p>
        <p>
        <label for="fabricante">Fabricante</label>
            <select required name="fabricante" id="fabricante">
                <option value=""></option>
                <?php foreach($listaDeFabricantes as $fabricante){?>
                <option value="<?=$fabricante["id"]?>"><?=$fabricante["nome"]?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
        </p>
    </form>


</body>
</html>