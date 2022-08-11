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
<!--<main class="main">-->

<iframe width="560" height="315" src="https://www.youtube.com/embed/_zDZYrIUgKE?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<img src="images/jogos/RPG/Dark Souls 3/2.png" class="foto-produto">
<img src="images/jogos/RPG/Dark Souls 3/3.png" class="foto-produto">
<img src="images/jogos/RPG/Dark Souls 3/4.png" class="foto-produto">

<div class="texto">
  <p class="p1">
    Dark Souls III é um jogo do gênero RPG de ação numa perspectiva de terceira pessoa, similar aos jogos anteriores
    da série. De acordo com o director Hidetaka Miyazaki, o desenho do jogo “é muito parecido com Dark Souls II”.
    Lothric é a cidade onde os Lordes das Cinzas se encontram, esses que têm seus deveres como herdeiros da Chama,
    responsáveis pela manutenção ou extinção da mesma. Entretanto, quando o dever chamou tais Lordes, cada um fugiu
    para uma parte do mundo, renunciando e negando seu trabalho.</p>
</div>
<p class="p2">
  Dark Souls 3
</p>
<p class="p3">
  R$:159,00
</p>
<button class="botao2">COMPRAR</button>
<P class="p4">
  MÍNIMOS:
  Sistema Operativo: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit
  Processador: Intel Core i3-2100 / AMD® FX-6300
  Memória: 4 GB de RAM
  Placa gráfica: NVIDIA® GeForce GTX 750 Ti / ATI Radeon HD 7950
  DirectX: Versão 11
  Rede: Ligação à Internet de banda larga
  Espaço no disco: Requer 25 GB de espaço livre
</P>
<p class="p5">
  DESENVOLVEDORA: FromSoftware / CRíTICA: 89
</p>



</html>