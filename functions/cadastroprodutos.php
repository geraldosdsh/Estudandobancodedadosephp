<?php
$dns = 'mysql:host=localhost;dbname=banco';
$username = 'root';
$password = '';

try {
    $db = new PDO($dns, $username, $password);
} catch (Exception $e) {
    die('conexao falhou' . $e->getMessage());
}

$nome = $_POST['nome'];
$quantidade = $_POST ['quantidade'];
$descricao = $_POST['descricao'];
$categorias = $_POST['categorias'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];



cadastro($nome, $quantidade, $descricao, $preco_venda, $categorias , $preco_compra,);

function cadastro(
    $nome,
    $quantidade,
    $descricao,
    $preco_venda,
    $categorias, 
    $preco_compra
) {
    global $db;

    $stmt = $db->prepare(
        'insert into tb_cadastro_produto (nome, quantidade, descricao, preco_venda , categorias, preco_compra ) values (:nome, :quantidade, :descricao, :preco_venda, :categorias,:preco_compra)'
    );

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':quantidade', $quantidade);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco_venda', $preco_venda);
    $stmt->bindParam(':categorias', $categorias);
    $stmt->bindParam(':preco_compra', $preco_compra);


    if ($stmt->execute()) {
        echo 'O produto foi cadastrado com sucesso'. '<div class="row mx-md-n5 mt-5">
        <a class="btn btn-primary btn-xl " type="Imput"
        href="http://localhost/phptest/site/cadastro_p.php">Voltar</a></li>
        </div>';
    } else {
        echo 'O prodruto nao foi cadastrado favor verificar se todas as opcoes estao cadastradas corretamente';
    }
}

?>
