<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP e SQL</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- ======== HEADER ========= -->
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="img/palanc.png" 
                width="70" height="64">
                </a>
            </div>
        </nav>
    </header> <!-- FIM HEADER  -->

    <main>

    <div class="container-xxl contneir">
        <br>
        <div class="container estilo">
            <p class="hero">Gereciamento de Produtos/Fabricantes</p>
            <h2 class="format">Sistema Vendas - CRUD PHP e SQL</h2>
        </div>
        <br>
    </div>
    <br>

    <div class="card">
        <div class="card-header">
            <h4>Categorias disponíveis para Gereciamento</h4>
        </div>
        <div class="card-body">

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Categorias Disponível
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                <div class="list-group">
                    <a href="fabricantes/visualizar.php" class="list-group-item list-group-item-action" aria-current="true">Fabricantes</a>
                    <a href="#" class="list-group-item list-group-item-action">Produtos</a>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    </main>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</body>
</html>