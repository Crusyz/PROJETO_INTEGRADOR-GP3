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
                            <a class="nav-link active" aria-current="page" href="#">Genêros</a>
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
                    <form class="d-flex" role="search" method="post" action="localiza-jogo.php">
                        <input class="form-control me-2" type="search" placeholder="Buscar na loja" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</body>

<h3 class="catalogo">Catálogo de Jogos</h3>

<h5 class="g1">Sobrevivencia</h5>
<h5 class="g2">Fps</h5>
<h5 class="g3">RPG</h5>
<h5 class="g4">Corrida</h5>


<main class="main">

    <div class="contents-cards">
        <div class="card">

            <img src="images/jogos/fps/cs go/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                CS GO
            </p>
            <p class="valor">
                R$:30,00
            </p>
            <div class="botao-comprar">
                <a href="csgo.php">
                    <button class="botao-comprar">COMPRAR</button>
                </a>
            </div>
        </div>

        <div class="card">
            <img src="images/jogos/sobrevivencia/DayZ/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                DayZ
            </p>
            <p class="valor">
                R$:71,00
            </p>
            <a href="dayz.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <!--<div class="card">
        <img src="images/jogos/Jogos-corrida/Forza Horizon 5/carretel.png" class="imagem-produto"/>
        <p class="titulo-produto">
            Forza Horizon 5 
        </p>
        <p class="valor">
            R$:309,00
        </p>
        <a href="forza.php">
        <button class="botao-comprar">COMPRAR</button>
        </a>
        </div>-->
        <div class="card">
            <img src="images/jogos/RPG/Dark Souls 3/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Dark Souls 3
            </p>
            <p class="valor">
                R$:159,00
            </p>
            <a href="ds3.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/Jogos-corrida/MotoGP 22/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                MotoGP 22
            </p>
            <p class="valor">
                R$:264,99
            </p>
            <a href="motogp.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>

        <div class="card">
            <img src="images/jogos/fps/RAINBOW SIXSIEGE/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Raibow Sixsiege
            </p>
            <p class="valor">
                R$:60,00
            </p>
            <a href="rainbow.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>

        <div class="card">
            <img src="images/jogos/sobrevivencia/Raft/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Raft
            </p>
            <p class="valor">
                R$:31,00
            </p>
            <a href="raft.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/RPG/Genshin Impact/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Genshin Impact
            </p>
            <p class="valor">
                R$:20,00
            </p>
            <a href="gen.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/Jogos-corrida/Forza Horizon 5/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Forza Horizon 5
            </p>
            <p class="valor">
                R$:309,00
            </p>
            <a href="forza.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>

        <div class="card">
            <img src="images/jogos/fps/valorant/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Valorant
            </p>
            <p class="valor">
                R$:10,00
            </p>
            <a href="valorant.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/sobrevivencia/minecraft/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Minecraft
            </p>
            <p class="valor">
                R$:100,00
            </p>
            <a href="mine.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/RPG/Undertale/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Undertale
            </p>
            <p class="valor">
                R$:6,70
            </p>
            <a href="under.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <div class="card">
            <img src="images/jogos/Jogos-corrida/Need for Speed Heat/carretel.png" class="imagem-produto" />
            <p class="titulo-produto">
                Need for Speed Heat
            </p>
            <p class="valor">
                R$:279,00
            </p>
            <a href="need.php">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>-




    </div>
</main>

</body>

</html>