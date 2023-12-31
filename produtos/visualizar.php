<?php require_once "../src/funcoes-produtos.php";
    require_once "../src/funcoes-utilitarias.php";
    

$listaDeprodutos = lerProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Visualização</title>
    <style>
        * {box-sizing: border-box;}
        .produtos {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            width: 80%;
            margin: auto;
        }

        .produto {
            background-color: aqua;
            padding: 1rem;
            width: 49%;
            box-shadow: black 0 0 10px;
        }
    </style>
</head>
<body>
    <h1>Produtos | Select - <a href="../index.php">Home</a></h1>
    <hr>

    <h2>Lendo e visualizando produtos</h2>

    <p><a href="inserir.php">Inserir novo produto</a></p>


    <div class="produtos">
        <?php foreach($listaDeprodutos as $produto){ ?>
        <article class="produto">
            <h3><?=$produto["Produto"]?></h3>
            <p><b>Preço: <?=$formataPreco($produto["Preço"])?></b></p>
            <p><b>Quantidade: <?=$produto["Quantidade"]?></b></p>
            <p><b>Fabricante: <?=$produto["Fabricante"]?></b></p>
            <p><b>Descrição: <?=$produto["descricao"]?></b></p>
            <!-- Solução 1 -->
            <!-- <p><b>Total: <?=$formataPreco($produto["Preço"] * $produto["Quantidade"])?></b></p> -->

            <!-- Solução 2: Fazer a conta direito na query SQL e pegar o resultado (Coluna Total) alem de passar a formatação-->
            <p><b>Total: <?=$formataPreco($produto["Total"])?></b></p>

            <!-- Solução 2: Fazer a conta direito na query SQL e pegar o resultado (Coluna Total) alem de passar a formatação-->
            <!-- <p><b>Total: <?=calcularTotal($produto["Preço"] , $produto["Quantidade"])?></b></p> -->
            <hr>
            <p><a href="excluir.php?id=<?=$produto["id"]?>">Excluir</a></p>
            <p><a href="atualizar.php?id=<?=$produto["id"]?>">Editar</a></p>
        </article>
        <?php }?>

    </div>
</body>
</html>