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

    if (verifica_funcionarios_exists($nome,$telefone)< 1){
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
    } else {
        echo '<script type="text/javascript">alert ("Ops o Funcionario(a) ja foi cadastrado")</script>';
    }

   
}

function verifica_funcionarios_exists($nome,$telefone){
    global $db;
    $stmt = $db->prepare('select count(id) from tb_cadastro_funcionarios where nome = :nome and telefone = :telefone');
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();
    return $stmt->fetch()[0];
}




?>
