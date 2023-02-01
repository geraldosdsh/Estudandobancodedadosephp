<?php
include '../conexao.php';
include '../site/head.php';
?>
<header class="masthead bg-primary text-dark text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/produtos.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Funcionario</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p  class="masthead-subheading font-weight-light mb-0"><a href="cadastro_funcionarios.php"  class="btn btn-dark">Cadastro Novo Funcionario</a></p>
        </div>
    </header>
    <!-- Portfolio Section-->
<div class="container-fluid mt-3">

      
<?php include '../functions/exibir_funcionarios.php'; ?>
</div>
<?php include '../site/footer.php'; ?>
