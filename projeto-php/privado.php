<?php
  $nome = $_GET['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>meu trabalho de php</title>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">startbootstrap</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Voltar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">sobre</h2>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">fale comigo</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">nome completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">nome necessário.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">email necessário.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">esse email não é valido.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">número de telefone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">numero de telefone necessário.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Menssagem</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">mensagem necessária.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">envio bem sucedido</div>
                                    <br/>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error</div></div>
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; site para a aula de php 2025</small></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
