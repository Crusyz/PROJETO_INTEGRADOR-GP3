<?php
include('config.php');
require_once('repository/LoginRepository.php');

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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="catalogo.php">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="formulario-cadastro-cliente.php">Cadastro</a>
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar na loja" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</body>
<!--<main class="main">-->

<iframe width="560" height="315" src="https://www.youtube.com/embed/GXr5glhGkzE?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<img src="images/jogos/sobrevivencia/minecraft/2.png" class="foto-produto">
<img src="images/jogos/sobrevivencia/minecraft/3.png" class="foto-produto">
<img src="images/jogos/sobrevivencia/minecraft/4.png" class="foto-produto">

<div class="texto">
    <p class="p1">
        Minecraft é um jogo eletrônico, que tem por objetivo básico construir e quebrar blocos. O jogo foi criado pelo
        sueco Markus Persson, lançado em 2011, inicialmente para PC e posteriormente para outras plataformas como
        Playstation 3, Playstation 4, Xbox 360 e Xbox One. O principal objetivo do jogo é simplesmente construir. Você
        conta com uma série de ferramentas diferentes, que podem ser utilizadas tanto para coletar materiais quanto como
        armas. Ao coletar os blocos, o jogador tem a chance de utilizar seus recursos para construir o que bem entender.
    </p>
</div>
<p class="p2">
    Minecraft
</p>
<p class="p3">
    R$:100,00
</p>
<button class="botao2">COMPRAR</button>
<P class="p4">
    Requisitos mínimos;
    Sistema operacional: Windows 7, Mac OS X 10.9, Linux distribuição de 2014 ou mais recente
    Processador: Intel Core i3-3210 3.2 GHz ou AMD A8-7600 APU 3.1 GHz
    Memória RAM: 4GB
    Placa de vídeo: Intel Graphics 4000, NVidia GeForce 400 ou AMD Radeon R5 com Open GL 4.4
    Armazenamento: pelo menos 1 GB de espaço disponível
</P>
<p class="p5">
    DESENVOLVEDORA: Mojang Studios / CRíTICA: 93
</p>



</html>