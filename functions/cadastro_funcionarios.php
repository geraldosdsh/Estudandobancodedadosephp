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
$telefone = $_POST ['telefone'];
$loja = $_POST['loja'];
$cargo = $_POST['cargo'];




cadastro($nome, $telefone, $loja, $cargo);

function cadastro(
    $nome,
    $telefone,
    $loja,
    $cargo,
) {
    global $db;

    $stmt = $db->prepare(
        'insert into tb_cadastro_funcionarios (nome, telefone, loja , cargo) values (:nome, :telefone, :loja, :cargo)'
    );

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':loja', $loja);
    $stmt->bindParam(':cargo', $cargo);



    if ($stmt->execute()) {
        echo 'O funcionario foi cadastrado com sucesso'. '<div class="row mx-md-n5 mt-5">
        <a class="btn btn-primary btn-xl " type="Imput"
        href="http://localhost/phptest/site/cadastro_funcionarios.php">Voltar</a></li>
        </div>';;
    } else {
        echo 'O prodruto nao foi cadastrado favor verificar se todas as opcoes estao cadastradas corretamente';
    }
}

?>
