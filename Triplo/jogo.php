<?php
include('config.php');
require_once('repository/JogoRepository.php');
require_once('repository/LoginRepository.php');

// $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
// $jogo = fnLocalizaJogoPorNome($nome);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$jogo = fnLocalizaJogoPorId($id);

if (isset($_SESSION['login'])) {
    $condicao = ($_SESSION['login'] == fnLogin('admin@triplo.com', 'admin@123'));
} else {
    $condicao = 0;
}
?>
<!doctype html>
<html lang="pt_BR">

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

    <style>
    th {
        color: white;

    }

    td {
        background-color: whitesmoke;
    }
    </style>

</head>

<body>
    <?php include('navbar.php'); ?>
    <br>
    <div style="border: 3px solid white; color: white; font-size: 18px; font-weight: bold">
        <iframe width="560" height="315" src=" <?= $jogo->link ?>" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen class="video"></iframe>
        <div class="card col-4 offset-4 text-center">
            <img src="<?= $jogo->foto ?>" id="ftId" class="" alt="foto do jogo">
        </div>
        <div>
            <p type="hidden" name="idJogo" id="jogoId" value="<?= $jogo->id ?>"></p>
        </div>
        <!-- <div class="mb-3 form-group">
            <label for="descricaoId" class="form-label">Trailer</label>
        </div> -->
        <div class="mb-3 form-group">
            <label for="nomeId" class="form-label">Nome:</label>
            <?= $jogo->nome ?>
        </div>
        <div class="mb-3 form-group">
            <label for="descricaoId" class="form-label">Descrição:</label>
            <?= $jogo->descricao ?>
        </div>
        <div class="mb-3 form-group">
            <label for="descricaoId" class="form-label">Tipo:</label>
            <?= $jogo->tipo ?>
        </div>
        <div class="mb3 form-group">
            <label for="descricaoId" class="form-label">Requisitos minimos:</label>
            <?= $jogo->req ?>
        </div>
        <div class="mb-3 form-group">
            <label for="lancamentoId" class="form-label">Lançamento:</label>
            <?= $jogo->lancamento ?>
        </div>
        <div class="mb-3 form-group">
            <label for="criticaId" class="form-label">Crítica:</label>
            <?= $jogo->critica ?>
        </div>
        <div class="mb-3 form-group">
            <label for="precoId" class="form-label">Preço:</label>
            <?= $jogo->preco ?>
        </div>
        <button class="botao">COMPRAR</button>
    </div>

</body>

</html>