<?php
include '../conexao.php';
include '../site/head.php';
?>
<header class="masthead bg-primary text-dark text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/produtos.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Categorias</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p  class="masthead-subheading font-weight-light mb-0"><a href="http://localhost/phptest/site/cadastro_categorias.php"  class="btn btn-dark">Cadastrar Nova Categoria</a></p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <div class="container-fluid mt-3">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form class="m-5" id="contactForm" method="post" action="../functions/cadastro_categoria.php">
                <div  class="form-floating mb-3">
                    <select name="categorias" id="categorias" class="form-control"  placeholder="categorias">
                        <?php include '../functions/exibir_categorias.php'; ?>
                    </select>    
                </div>
            </form>
        </div>
    </div>
</div>


</div>

        
      

<?php include '../site/footer.php'; ?>
