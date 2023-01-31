<?php
$dns = 'mysql:host=localhost;dbname=banco';
$username = 'root';
$password = '';

try {
    $db = new PDO($dns, $username, $password);
} catch (Exception $e) {
    die('conexao falhou' . $e->getMessage());
}

$categoria = $_POST['categoria'];


cadastro($categoria);

function cadastro(
    $categoria,
) {
    global $db;

    $stmt = $db->prepare(
        'insert into tb_cadastro_categoria (categoria) values (:categoria)'
    );

    $stmt->bindParam(':categoria', $categoria);
 

    if ($stmt->execute()) {
        echo 'A categoria foi cadastrada com sucesso'. '<div class="row mx-md-n5 mt-5">
        <a class="btn btn-primary btn-xl " type="Imput"
        href="http://localhost/phptest/site/cadastro_categorias.php">Voltar</a></li>
        </div>';
    } else {
        echo 'Ops a categoria nao foi cadastrado favor verificar se foi tudo preenchido corretamente';
    }
}

?>
