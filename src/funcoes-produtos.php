<?php require_once "conecta.php";

function lerProdutos(PDO $conexao):array{
    //Versão basica - Dados somente da tabela produtos
    // $sql = "SELECT nome, preco, quantidade FROM produtos ORDER BY nome";

    // Versão 2 (Dados das duas tabelas: produtos e fabricantes)
    $sql = "SELECT 
                produtos.id,
                produtos.nome AS Produto,
                produtos.preco AS Preço,
                produtos.quantidade AS Quantidade,
                fabricantes.nome AS Fabricante
            FROM produtos INNER JOIN fabricantes
            ON produtos.fabricante_id = fabricantes.id
            
            ORDER BY Produto";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta ->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar produtos: ".$erro->getMessage());
    }
    return $resultado;
}