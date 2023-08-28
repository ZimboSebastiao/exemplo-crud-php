<?php require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
$quantidade = count($listaDeFabricantes);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Visualização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- ======== HEADER ========= -->
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                <img src="../img/palanc.png" 
                width="70" height="64">
                </a>
            </div>
        </nav>
    </header> <!-- FIM HEADER  -->

    <main>

        <div class="container-xxl contneir">
            <br>
            <p class="navbar-brand btn btn-outline-secondary quanti" role="button" aria-disabled="true">
            <img src="../img/caixas.png" width="28" height="27" alt="">
            Quantidade (<?=$quantidade?>) 
            </p>

            <!-- <button type="button" class="btn btn-primary">
            Notifications <span class="badge text-bg-secondary">4</span>
            </button> -->
            <div class="container estilo">
                <p class="hero">Cadastro/Novo Fabricante</p>
                <h3>Sistema Vendas - Fabricantes</h3>
                <a class="navbar-brand btn btn-outline-secondary botao" role="button" aria-disabled="true" href="inserir.php"> <img src="../img/adicionar2.png" width="28" height="27" alt="">  Adicionar</a>
            </div>
            <br>
        </div>
        <br>

        <!-- ======== TABELA ========= -->
        <table class="table">
            <thead>
                <tr class="table-light">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Operações</th>
                </tr>
            </thead>
          <tbody>
            <?php foreach ($listaDeFabricantes as $fabricante) { ?>
                <tr>
                    <td class="tdformat"><?=$fabricante["id"]?></td>
                    <td class="tdformat"><?=$fabricante["nome"]?></td>
                    <td>
        
                        <!-- 
                            Link DINÁMICO
                            A URL do href precisa de parâmetro com dados dinâmicos (no caso, o ID de cada fabricante)
                        -->

                        <!-- ===== Editar ====== -->
                        <a class="navbar-brand btn btn-outline-secondary editar" role="button"   aria-disabled="true" href="atualizar.php?id=<?=$fabricante["id"]?>&nome=<?=$fabricante["nome"]?>">
                        <img src="../img/editar.png" width="16" height="15" alt="">
                        Editar</a>

                          
                        <!-- ===== Excluir ====== -->
                        <a class="navbar-brand btn btn-outline-secondary apagar" role="button" aria-disabled="true" href="deletar.php?id=<?=$fabricante["id"]?>&nome=<?=$fabricante["nome"]?>">
                        <img src="../img/excluir.png" width="16" height="15" alt="">
                            Apagar</a>
                    </td>
                </tr>
                <?php ;}?>
            </tbody>
        </table> <!-- FIM TABELA  -->

    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>