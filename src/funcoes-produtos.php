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
                fabricantes.nome AS Fabricante,
                produtos.descricao AS descricao,
                (produtos.preco * produtos.quantidade) AS Total
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

function inserirProduto(
    PDO $conexao, 
    string $nome, 
    float $preco, 
    int $quantidade, 
    int $frabricanteId, 
    string $descricao):void {

    $sql = "INSERT INTO produtos(
        nome, preco, quantidade, descricao, fabricante_id) 
        VALUES (:nome, :preco, :quantidade, :descricao, :fabricanteId
        )";

        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);

            // Ao trabalhar com valores quebrados, para os parâmetros nomeados, você deve usar a constamte PARAM_STR no PDO. No momento, não há outra forma no PDO de lidar com valores deste tipo devidp aos diferentes tipos de dados que cada banco suporta.
            $consulta->bindValue(":preco", $preco, PDO::PARAM_STR);
            $consulta->bindValue(":quantidade", $quantidade, PDO::PARAM_INT);
            $consulta->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            $consulta->bindValue(":fabricanteId", $frabricanteId, PDO::PARAM_INT);

            $consulta->execute();

        } catch (Exception $erro) {
            die("Erro ao inserir: ".$erro->getMessage());
        }

}

function lerUmProduto(PDO $conexao, int $idProduto):array{
    $sql = "SELECT * FROM produtos WHERE id = :id";

    try {
       $consulta = $conexao->prepare($sql);
       $consulta->bindValue(":id", $idProduto, PDO::PARAM_INT);
       $consulta->execute();
       $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $erro) {
        die("Erro ao carregar: ".$erro->getMessage());
    } 
    
    return $resultado;

} 


function atualizarProduto($conexao, $id, $nome, $preco, $quantidade, $descricao, $frabricanteID){
    
}