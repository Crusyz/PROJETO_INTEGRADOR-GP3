<?php
include('config.php');
require_once('repository/JogoRepository.php');
require_once('repository/LoginRepository.php');

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$destaque = filter_input(INPUT_POST, 'destaque', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_SESSION['login'])) {
    $condicao = ($_SESSION['login'] == fnLogin('admin@triplo.com', 'admin@123'));
} else {
    $condicao = 0;
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <head>
        <title>Loja Games</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

<body>

    <?php include('navbar.php'); ?>
    <br>
    
    <section class="container">

        <header class="topo">

            <!--  <div class="logo">
                <img src="..." width="190" height="170">
            </div> -->
            <div id="anuncioproduto">
                    Destaques

                </div>

        </header>
        <!--Fim Topo-->

        <div id="banner">
            <!--Inicio banner-->

            <!--deixar banner clicavel " <a href="login.php"> " -->

            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <?php
                    foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
                    <img src="<?= $jogo->foto ?>" />
                    <?php
                    endforeach; ?>

                    <?php
                    foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
                    <img src="<?= $jogo->foto ?>" data-thumb="" />
                    <?php
                    endforeach; ?>

                    <?php
                    foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
                    <img src="<?= $jogo->foto ?>" data-thumb="" />
                    <?php
                    endforeach; ?>

                    <?php
                    foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
                    <img src="<?= $jogo->foto ?>" data-thumb="" data-transition="slideInLeft" />
                    <?php
                    endforeach; ?>

                </div>
            </div>
            < </div>
                <!-- Fim banner-->

                <br>
                <br>
                <br>
                <div id="anuncioproduto">
                    Opinião Popular

                </div>
                <div id="conteudo">

                    <ul id="album-fotos">
                        <!--imagem clicavel-->
                        <!--- <a href="file:///C:/Users/junior/Desktop/HTML/login.php">-->
                        <!--<img src="foto01">-->
                        
                        </li>
                        <li id="foto01"> <span> FPS mais jogado</span> </li>
                        <li id="foto02"> <span> Comunidade gigantesca</span> </li>
                        <li id="foto03"> <span> Novas atualização</span> </li>
                        <li id="foto04"> <span> Graficos 4k</span> </li>
                        <li id="foto05"> <span> Melhor close-combat</span> </li>
                        <li id="foto06"> <span> Para fans de Loli</span> </li>
                        <li id="foto07"> <span> Mecanicas revolucionarias</span> </li>
                        <li id="foto08"> <span> Maior simulador de moto</span> </li>
                        <li id="foto09"> <span> Mais novo jogo FPS</span> </li>
                        <li id="foto10"> <span> Mais aclamado por fans</span> </li>
                        <li id="foto11"> <span> Game de bater e rolar</span> </li>
                        <li id="foto12"> <span> Ultimo bom jogo da EA</span> </li> -->

                    </ul>
                    <!--Fim album Fotos-->

                </div>
                <!--Fim Conteúdo-->


    </section>
    <!--Fim container-->




</body>

</html>