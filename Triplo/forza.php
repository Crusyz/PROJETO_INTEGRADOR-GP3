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
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
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

<iframe width="560" height="315" src="https://www.youtube.com/embed/FYH9n37B7Yw?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>

<img src="images/jogos/Jogos-corrida/Forza Horizon 5/2.png" class="foto-produto">
<img src="images/jogos/Jogos-corrida/Forza Horizon 5/3.png" class="foto-produto">
<img src="images/jogos/Jogos-corrida/Forza Horizon 5/4.png" class="foto-produto">

<div class="texto">
  <p class="p1">
    Desde o início, Forza Horizon 5 deixa claro seus objetivos: criar uma aventura memorável que combina visuais
    ultrarrealistas e premissas meio absurdas em um verdadeiro playground de possibilidades para se divertir. Sua
    maior aventura Horizon te espera! Explore o mundo aberto vibrante e em constante evolução nas terras mexicanas.
    Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo. Comece
    hoje sua Aventura Horizon e adicione o jogo a sua Lista de Desejos!</p>
</div>
<p class="p2">
  Forza Horizon 5
</p>
<p class="p3">
  R$:309,00
</p>
<button class="botao2">COMPRAR</button>
<P class="p4">
  Requer um processador e sistema operacional de 64 bits;
  SO: Windows 10 version 15063.0 or higher;
  Processador: Intel i5-4460 or AMD Ryzen 3 1200;
  Memória: 8 GB de RAM;
  Placa de vídeo: NVidia GTX 970 OR AMD RX 470;
  DirectX: Versão 12;
  Rede: Conexão de internet banda larga;
  Armazenamento: 110 GB de espaço disponível;

</P>
<p class="p5">
  Desenvolvedora: Playground Games / Critica: 91
</p>



</html>