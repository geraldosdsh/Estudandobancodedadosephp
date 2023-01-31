<?php
include '../conexao.php';
include '../site/head.php';
?>
<header class="masthead bg-primary text-dark text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Novo Funcionario</h1>
            <div class="formulariospd"><!-- Contact Section Heading-->
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
            <!-- Masthead Subheading-->
            <p  class="masthead-subheading font-weight- mb-0"><a href="funcionarios.php"  class="btn btn-dark">Funcionarios Cadastrados</a></p>
        </div>
    </header>
    <!-- Portfolio Section-->
<div class="container">
        
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
    <form class="m-5" id="contactForm"  method="post" action="../functions/cadastro_funcionarios.php">
        <div class="col form-row">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do Funcionario">
            <div class="invalid-feedback" data-sb-feedback="nome:required">A message is required.
            </div>
        </div>
        <div class="col form-row">
            <input type="text" id="telefone" name="telefone" class="form-control"  onkeypress="return onlynumber();" placeholder="Telefone">
            <div class="invalid-feedback" data-sb-feedback="telefone:required">A message is required.
            </div>
        </div>

        <div class="col form-row">
            <input type="text" id="loja" name="loja" class="form-control" placeholder="Loja">
            <div class="invalid-feedback" data-sb-feedback="loja:required">A message is required.
            </div>
        </div>
        
        <div  class="form-floating mb-3">
            <select name="cargo" id="cargo" class="form-control"  placeholder="cargo">
                <option value="Gerente">Gerente</option>
                <option value="Encarregado">Encarregado</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Atendente">Atendente</option>
                <option value="Caixa">Caixa</option>
            </select>
                <label for="cargo">Cargo Do Funcionario</label>
            <div class="invalid-feedback" data-sb-feedback="cargo:required">A message is required.
            </div>
        </div>
        </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                           </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3" >Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
        <div>
        
                    <div class="row mx-md-n5 mt-5">
            <button href="http://localhost/phptest/cadastroprodutos.php" class="btn btn-primary btn-xl mb-2" id="submitButton" onclick="validar()" type="submit"> Cadastrar </button>
        </div>
        
            
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</body>

</html>



<?php include '../site/footer.php'; ?>
