<?php
include('config.php');
require_once('repository/LoginRepository.php');
$condicao = ($_SESSION['login'] == fnLogin('admin@triplo.com', 'admin@123'));
if (!isset($_SESSION['login'])) {
  $n_condicao;
}
?>
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
          <form class="d-flex" role="search" method="post" action="localiza-jogo.php">
            <input class="form-control me-2" type="search" placeholder="Buscar na loja" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</body>
<!--<main class="main">-->

<iframe width="560" height="315" src="https://www.youtube.com/embed/HLUY1nICQRY?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<img src="images/jogos/RPG/Genshin Impact/2.png" class="foto-produto">
<img src="images/jogos/RPG/Genshin Impact/3.png" class="foto-produto">
<img src="images/jogos/RPG/Genshin Impact/4.png" class="foto-produto">

<div class="texto">
  <p class="p1">
    O que é Genshin Impact e quando foi lançado? O Genshin Impact é um jogo de RPG que foi lançado em 28 de setembro
    de 2020. Ele é gratuito e está disponível para PC, PS4, PS5 e smartphones, sendo que o usuário pode jogar com
    amigos ou sozinho, explorando a história principal do gameNa história de Genshin, você controla o personagem
    chamado de Viajante. O jogador pode escolher entre Aether, o personagem masculino, ou Lumine, a versão feminina
    e irmã de Aether. No início do jogo, os personagens vagam pelos mundos.</p>
</div>
<p class="p2">
  Genshin Impact
</p>
<p class="p3">
  R$:20,00
</p>
<button class="botao2">COMPRAR</button>
<P class="p4">
  REQUISITOS- MÍNIMOS:
  SO: Windows® 7/Vista/XP
  Processador: Intel® Core™ 2 Duo E6600 ou AMD Phenom™ X3 8750
  Memória: 2 GB de RAM
  Placa de vídeo: A placa de vídeo precisa ter 256 MB ou mais de memória e ser compatível com DirectX 9 e Pixel Shader
  3.0
  DirectX: Versão 9.0c
  Armazenamento: 15 GB de espaço disponível
</P>
<p class="p5">
  DESENVOLVEDORA: VALVE / CRíTICA: 78
</p>



</html>