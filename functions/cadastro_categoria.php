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
    if (verifica_categoria_exist ($categoria) < 1){
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
            echo 'Ops a categoria nao foi cadastrada favor verificar se foi tudo preenchido corretamente';
        }
    } else {
        echo '<script type="text/javascript">alert ("Ops a categoria ja foi cadastrada")</script>';
    }
   
}


function verifica_categoria_exist($categoria){
    global $db;
    //$stmt = $db->prepare("select count(id) from tb_cadastro_categoria where categoria = {$categoria}");
    $stmt = $db->prepare('select count(id) from tb_cadastro_categoria where categoria = :categoria');
    $stmt->bindParam(':categoria', $categoria);
    $stmt->execute();
    //A funca var_dump logo abaixo, e uma funcao para exibir dados retornados de uma cconsulta
    //var_dump($stmt->fetch()[0]);
    // a funca die e uma funcao usada para travar a leitura do codigo 
    //die();
    return $stmt->fetch()[0];
    
};

?>
