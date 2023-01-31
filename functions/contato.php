
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
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$atendimento = $_POST['atendimento'];



cadastro(
    $nome,
    $telefone,
    $mensagem,
    $email,
    $atendimento
);

function cadastro(
    $nome,
    $telefone,
    $mensagem,
    $email,
    $atendimento
) {
    global $db;

    $stmt = $db->prepare(
        'insert into tb_emails_contato (nome, telefone, email, mensagem, atendimento) values (:name, :telefone, :email, :mensagem, :atendimento)'
    );

    $stmt->bindParam(':name', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mensagem', $mensagem);
    $stmt->bindParam(':atendimento', $atendimento);

    if ($stmt->execute()) {
        echo 'E-mail enviado com sucesso'. '<div class="row mx-md-n5 mt-5">
        <a class="btn btn-primary btn-xl " type="Imput"
        href="http://localhost/phptest">Voltar</a></li>
        </div>';;
    } else {
        echo 'falha no envio do e-mail';
    }
}
?>
