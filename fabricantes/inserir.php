<?php 

if( isset($_POST['inserir']) ){
    // Importando as funções e conexão
    require_once "../src/funcoes-fabricantes.php";

    // Capturando o valor digitado do nome e sanatizando
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

    // Chamar a função, passar os dados de conexão e o dado (nome fabricante) digitado no formulário
    inserirFabricante($conexao, $nome); 

    // Redirecionamento
    header("location:visualizar.php");
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserção</title>
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
                <div class="container estilo">
                    <p class="hero">Adicionar/Novo Fabricante</p>
                    <h3 class="adic">Adicionar Fabricante</h3>
                </div>
                <br>
            </div>
            <br>

            <form action="" method="post">

                <div class="input-group mb-3">
                    <input type="text" name="nome" id="nome" required class="form-control" placeholder="Nome do Fabricante" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="inserir">Inserir Fabricante</button>
                </div>
            </form>
            <p>
                <a href="visualizar.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Página Anterior</a>
            </p>
    </main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>