<?php
include('config.php');
require_once('repository/LoginRepository.php');
require_once('repository/JogoRepository.php');

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

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

        <!-- <style>
        .card {
            width: 320px;
            height: 420px;
            float: left;
            margin-left: 45px;
            border: 1px solid black;
            box-shadow: 3px 2px 10px rgba(0, 0, 0, 4);
            margin-top: 25px;
        }

        .card img-top {
            max-width: 90%;
            width: 260px;
            height: 130px;
            margin-left: 25px;
            ;
        }
        </style> -->

    </head>

<body>
    <?php include('navbar.php'); ?>

    <h3 class="catalogo">Catálogo de Jogos</h3>
    <main class="main">
        <?php $cont = 0;
        foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
        <div class="card">
            <img src="<?= $jogo->foto ?>" class="imagem-produto" />
            <p class="titulo-produto">
                <?= $jogo->nome ?>
            </p>
            <p class="valor">
                <?= $jogo->preco ?>
            </p>
            <a href="jogo.php?id=<?= $jogo->id ?>">
                <button class="botao-comprar">COMPRAR</button>
            </a>
        </div>
        <?php $cont++;
            if ($cont == 4) {
                break;
            }
        endforeach; ?>
    </main>

</body>

</html>