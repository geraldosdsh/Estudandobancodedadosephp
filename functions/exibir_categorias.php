<?php
get();
function get()
{
    global $db;

    $stmt = $db->prepare('select * from tb_cadastro_categoria');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibe os dados
   
    
    foreach ($result as $row) {
        echo '<option value="'  . $row['categoria'] . '">'  . $row['categoria'] . '</option>';
    }

}


?>

