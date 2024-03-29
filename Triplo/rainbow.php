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

<iframe width="560" height="315" src="https://www.youtube.com/embed/inw5RaGfuvc?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<img src="images/jogos/fps/RAINBOW SIXSIEGE/2.png" class="foto-produto">
<img src="images/jogos/fps/RAINBOW SIXSIEGE/3.png" class="foto-produto">
<img src="images/jogos/fps/RAINBOW SIXSIEGE/4.png" class="foto-produto">

<div class="texto">
  <p class="p1">
    Mergulha de cabeça em combates 5 contra 5, competições exigentes e emocionantes batalhas de equipa em PVP. Tom
    Clancy's Rainbow Six® Siege é uma experiência em expansão com oportunidades ilimitadas para aperfeiçoares a tua
    estratégia e liderares a tua equipa até à vitória.
    O Siege está em constante evolução. Cada temporada traz novos conteúdos, novos Agentes e habilidades, novos
    eventos, armas e mapas.Começa com a experiência base de Rainbow Six Siege, que inclui o jogo completo com todos
    os mapas e modos.</p>
</div>
<p class="p2">
  RAINBOW SIXSIEGE
</p>
<p class="p3">
  R$:60,00
</p>
<button class="botao2">COMPRAR</button>
<P class="p4">
  REQUISITOS- MÍNIMA:
  SISTEMA OPERACIONAL: 64-bit version of the following operating systems: Windows 7 SP1 / Windows 8 / Windows 8.1 /
  Windows 10
  PROCESADOR: Intel Core i3 560 @ 3.3 GHz or AMD Phenom II X4 945 @ 3.0 GHz**
  MEMÓRIA RAM: 6 GB
  PLACA DE VÍDEO: Nvidia GeForce GTX 460 or AMD Radeon HD5770 (1024MB VRAM)
  DISCO RÍGIDO: 85.5 GB
  DIRECTX: DirectX 11
  SOM: DirectX Compatible Sound Card with latest drivers
  PERIFÉRICOS: Compatible with X-Input / LANÇAMENTO- 09/06/2014 /

  DESENVOLVEDORA- UBSOFT
</P>




</html>