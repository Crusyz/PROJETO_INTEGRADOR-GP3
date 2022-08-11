<?php
include('config.php');
require_once('repository/LoginRepository.php');
$condicao = ($_SESSION['login'] == fnLogin('admin@triplo.com', 'admin@123'));
if (!isset($_SESSION['login'])) {
    $n_condicao;
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

    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="catalogo.php">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Genêros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="formulario-cadastro-cliente.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listagem-de-jogos.php">Jogos</a>
                        </li>
                        <?php if ($condicao) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listagem-de-clientes.php">Clientes</a>
                        </li>
                        <?php endif; ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search" method="post" action="localiza-jogo.php">
                        <input class="form-control me-2" type="search" placeholder="Buscar na loja" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <section class="container">

        <header class="topo">

            <!--  <div class="logo">
                <img src="..." width="190" height="170">
            </div> -->



        </header>
        <!--Fim Topo-->

        <div id="banner">
            <!--Inicio banner-->

            <!--deixar banner clicavel " <a href="login.php"> " -->

            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="images/jogos/Jogos-corrida/Forza Horizon 5/carretel.png" data-thumb="image/0.jpg" />
                    <img src="images/jogos/fps/RAINBOW SIXSIEGE/carretel.png" data-thumb="images/1.png" />
                    <img src="images/jogos/RPG/Genshin Impact/carretel.png" data-thumb="images/3.png" />
                    <img src="images/jogos/sobrevivencia/minecraft/carretel.png" data-thumb="images/2.jpg"
                        data-transition="slideInLeft" />

                </div>
            </div>
        </div><!-- Fim banner-->

        <br>
        <br>
        <br>
        <div id="anuncioproduto">
            Jogos em destaques

        </div>
        <div id="conteudo">

            <ul id="album-fotos">
                <!--imagem clicavel-->
                <!--- <a href="file:///C:/Users/junior/Desktop/HTML/login.php">-->
                <!--<img src="foto01">-->
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
                <li id="foto12"> <span> Ultimo bom jogo da EA</span> </li>

            </ul>
            <!--Fim album Fotos-->

        </div>
        <!--Fim Conteúdo-->


    </section>
    <!--Fim container-->




</body>

</html>