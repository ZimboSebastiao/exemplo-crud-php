<?php require_once "../src/funcoes-produtos.php";
require_once "../src/funcoes-fabricantes.php";

$listaDeFabricantes = lerFabricantes($conexao);

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$produto = lerUmProduto($conexao, $id);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Atualização</title>
</head>
<body>
    <h1>Produtos | SELECT/UPDATE</h1> <p><a href="visualizar.php">Voltar</a></p>
    <hr>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required value="<?=$produto['nome']?>" type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input required value="<?=$produto['preco']?>" type="number" min="10" max="10000" step="0.01" name="preco" id="preco">
        </p>
        <p>
        <label for="quantidade">Quantidade:</label>
            <input required value="<?=$produto['quantidade']?>" type="number" min="1" max="100"  name="quantidade" id="quantidade">
        </p>
        <p>
        <label for="fabricante">Fabricante</label>
            <select required name="fabricante" id="fabricante">
                <option value=""></option>
                <?php foreach($listaDeFabricantes as $fabricante){?>
                    <!--  Chave estrangeira === Chave primaria-->
                <option <?php if($produto["fabricante_id"] === $fabricante["id"]) echo " selected "?> 
                value="<?=$fabricante['id']?>"><?=$fabricante['nome']?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea required name="descricao" id="descricao" cols="30" rows="3"><?=$produto['descricao']?></textarea>
        </p>
        <button name="atualizar" type="submit">Atualizar produto</button>
    </form>


</body>
</html>