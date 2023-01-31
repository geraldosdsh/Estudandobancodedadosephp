<?php
include '../conexao.php';
include '../site/head.php';
?>
<header class="masthead bg-primary text-dark text-center">
<div class="container d-flex align-items-center flex-column">
    <!-- Masthead Avatar Image-->
    <img class="masthead-avatar mb-5" src="../assets/img/produtos.png" alt="..." />
    <!-- Masthead Heading-->
    <h1 class="masthead-heading text-uppercase mb-0">Cadastrar Categoria</h1>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <!-- Masthead Subheading-->
    <p  class="masthead-subheading font-weight-light mb-0"><a href="categorias.php"  class="btn btn-dark">Categorias Cadastradas</a></p>
</div>
</header>
<!-- Portfolio Section-->
<div class="container-fluid mt-3">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form class="m-5" id="contactForm"  method="post" action="../functions/cadastro_categoria.php">
                <div class="col form-row">
                    <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Cadastrar Nova Categoria">
                    <div class="invalid-feedback" data-sb-feedback="categoria:required" required>A message is required.</div>
                </div>
                <div>
                    <div class="row mx-md-n5 mt-5">
                        <button href="" class="btn btn-primary btn-xl mb-2" id="submitButton" onclick="validar()" type="submit"> Cadastrar </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</div>;
<?php include '../site/footer.php'; ?>

