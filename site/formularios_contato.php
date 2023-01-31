<?php
include '../conexao.php';
include '../site/head.php';
?>
<header class="masthead bg-primary text-dark text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Formulario de Contato</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </header>
    <!-- Portfolio Section-->
<div class="container-fluid mt-3">

      
<?php include '../functions/exibir_contato.php'; ?>
</div>';
<?php include '../site/footer.php'; ?>


