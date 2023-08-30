<?php require_once "../src/funcoes-fabricantes.php";
    require_once "../src/funcoes-produtos.php";
$listaDeFabricantes = lerFabricantes($conexao);

if(isset($_POST['inserir'])){
        // Capturando o valor digitado do nome e sanatizando
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $quantidade = filter_input(INPUT_POST, "quantidade", FILTER_SANITIZE_NUMBER_INT);

        // Pegaremos o value, ou seja, o valor do id do fabricante
        $frabricanteID = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_NUMBER_INT);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

        inserirProduto($conexao, $nome, $preco, $quantidade, $frabricanteID, $descricao);
    
    // Redirecionamento
    header("location:visualizar.php");

}
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
            <input required type="number" min="1" max="100"  name="quantidade" id="quantidade">
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
        <button name="inserir" type="submit">Enviar</button>
    </form>


</body>
</html>