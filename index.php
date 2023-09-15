<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Salão | Home Page</title>
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
</head>

<body>
    <div id="header" class="uk-position-relative" uk-height-viewport>
        <div class="uk-flex uk-child-width-1-3">
            <div class="uk-inline-clip uk-transition-toggle uk-cover-container" tabindex="0" uk-height-viewport>
                <img src="assets/images/top1.jpg" alt="" uk-cover>
                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                    <div>
                        <blockquote cite="#">
                            <p class="uk-margin-small-bottom">
                                Trazendo vida à sua beleza.
                            </p>
                            <footer>Colorometrista <cite><a href="#">Ellen Strade</a></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="uk-inline-clip uk-transition-toggle uk-cover-container" tabindex="0" uk-height-viewport>
                <img src="assets/images/top2.jpg" alt="" uk-cover>
                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                    <div>
                        <blockquote cite="#">
                            <p class="uk-margin-small-bottom">
                                Cores que inspiram confiança..
                            </p>
                            <footer>Cabelereira <cite><a href="#">Stefany Cardoso</a></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="uk-inline-clip uk-transition-toggle uk-cover-container" tabindex="0" uk-height-viewport>
                <img src="assets/images/top3.jpg" alt="" uk-cover>
                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                    <div>
                        <blockquote cite="#">
                            <p class="uk-margin-small-bottom">
                                Preparando noivas para brilhar no dia que é todo delas, um casamento repleto de encanto e beleza.
                            </p>
                            <footer>Maquiador <cite><a href="#">Ayrton André</a></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-top">
            <div class="uk-section uk-section-xsmall uk-overlay-primary" uk-sticky="start: 200; animation: uk-animation-slide-top">
                <div class="uk-container uk-container-expand">
                    <div class="uk-flex uk-flex-middle">
                        <div><img src="assets/images/logo.png" width="200"></div>
                        <div class="uk-flex-auto uk-margin-small-left uk-margin-small-right">
                            <div class="uk-flex uk-flex-middle uk-flex-center">
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-text">Home</button>
                                </div>
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-text">Serviços</button>
                                </div>
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-text">Sobre Nós</button>
                                </div>
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-text">Contato</button>
                                </div>
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-text">Cadastro</button>
                                </div>
                                <div class="uk-padding-small uk-text-small uk-text-uppercase">
                                    <button class="uk-button uk-button-default">login</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="uk-link-heading"><span class="uk-margin-small-right" uk-icon="facebook"></span></a>
                            <a href="#" class="uk-link-heading"><span class="uk-margin-small-right" uk-icon="instagram"></span></a>
                            <a href="#" class="uk-link-heading"><span class="uk-margin-small-right" uk-icon="whatsapp"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="titulo-servicos">
        <div class="uk-section uk-section-small uk-background-contain uk-background-bottom-right" style="background-image: url(assets/images/bg1.jpg)">
            <div class="uk-container uk-container-small">
                <div class="uk-height-large uk-flex uk-flex-middle">
                    <div class="uk-text-large uk-text-uppercase uk-text-bold uk-padding-medium">
                        Nossos Serviços
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="servicos">
        <div class="uk-section uk-section-small uk-background-muted">
            <div class="uk-container uk-container-large">
                container
            </div>
        </div>
    </div>


    <!-- <nav class="uk-navbar-container uk-navbar-transparent">
        <div class="uk-container uk-container-expand">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav> -->
</body>

</html>