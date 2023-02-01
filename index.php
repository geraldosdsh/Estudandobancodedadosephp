<?php 
   include 'conexao.php';
   include 'site/head1.php';
?>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Solicitacao de Contato</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
        </div>
    </header>
    <!-- Portfolio Section-->

    <div class="container mb-5 mt-5">
        <div class="formulariospd"><!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm"  action="functions/contato.php" method="post">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nome" name="nome" type="text" placeholder="Enter your name..."
                            data-sb-validations="required" />
                        <label for="nome">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="nome:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com"
                            data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="(123) 456-7890"
                            data-sb-validations="required" />
                        <label for="telefone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="telefone:required">A phone number is required.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="mensagem" id="mensagem" type="text"
                            placeholder="Enter your message here..." style="height: 10rem"
                            data-sb-validations="required"></textarea>
                        <label for="mensagem">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="mensagem:required">A message is required.
                        </div>
                    </div>
                    <!-- Imput de selecao de atentimento-->
                    <div  class="form-floating mb-3">
                            <select name="atendimento" id="atendimento" class="form-control">
                            <option value="suporte">Suporte</option>
                            <option value="vendas">Vendas</option>
                            <option value="financeiro">Financeiro</option>
                            </select>
                        <label for="atendimento">Tipos de atendimentos</label>
                        <div class="invalid-feedback" data-sb-feedback="atendimento:required">A message is required.
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
                                    
                    <div class="row mx-md-n5 mt-5 mb-5">
                        <button href="http://localhost/phptest/arquivo.php" class="btn btn-primary btn-xl " id="submitButton" onclick="validar()" type="submit"> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                                </div>
    </section>
    <?php 
        include 'site/footer.php';
    ?>