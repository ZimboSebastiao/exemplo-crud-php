<?php require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>
<!-- <pre><?=var_dump($listaDeFabricantes)?></pre> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Visualização</title>
</head>
<body>
    <p><a href="../index.php">Home</a></p>
    <hr>
    <h1>Fabricantes | Select</h1>
    <hr>
    <h2>Lendo e carregando todos os fabricantes.</h2>
    <p><a href="inserir.php">Inserir novo fabricante</a></p>

    <table>
        <caption>Lista de Fabricantes</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Operações</th> 
            </tr>
        </thead>

        <tbody>
            <tr>
            <?php foreach ($listaDeFabricantes as $fabricante) { ?>
    
                </tr>
                <td><?=$fabricante["id"]?></td>
                <td><?=$fabricante["nome"]?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </td>
    
                <?php ;}?>
            </tr>
        </tbody>
</table>

</body>
</html>