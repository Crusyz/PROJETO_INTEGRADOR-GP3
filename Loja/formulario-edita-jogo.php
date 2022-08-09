<?php
include('config.php');
require_once('repository/JogoRepository.php');

$id = $_SESSION['id'];
$jogo = fnLocalizaJogoPorId($id);
?>
<!doctype html>
<html lang="pt_BR">

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

    <style>
        div,
        label {
            color: white;
        }
    </style>

</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="catalogo.html">Catálogo</a>
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
                            <a class="nav-link active" aria-current="page" href="login.html">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listagem-de-jogos.php">Jogos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listagem-de-clientes.php">Clientes</a>
                        </li>

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
                        <input class="form-control me-2" name="nomeJogo" type="search" placeholder="Buscar na loja" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Edição de Jogo</legend>
            <form action="editaJogo.php" method="post" class="form" enctype="multipart/form-data">
                <div class="card col-4 offset-4 text-center">
                    <img src="<?= $jogo->foto ?>" id="avatarId" class="rounded" alt="foto do jogo">
                </div>
                <div class="mb-3 form-group">
                    <label for="fotoId" class="form-label">Foto</label>
                    <input type="file" name="foto" id="fotoId" class="form-control">
                    <div id="helperFoto" class="form-text">Importe a foto</div>
                </div>
                <div>
                    <input type="hidden" name="idJogo" id="jogoId" value="<?= $jogo->id ?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="nomeId" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome" value="<?= $jogo->nome ?>">
                    <div id="helperNome" class="form-text">Informe o nome</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="descricaoId" class="form-label">Descrição</label>
                    <input type="descricao" name="descricao" id="descricaoId" class="form-control" placeholder="Informe a descrição" value="<?= $jogo->descricao ?>">
                    <div id="helperDescricao" class="form-text">Informe a descrição</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="lancamentoId" class="form-label">Lançamento</label>
                    <input type="text" name="lancamento" id="lancamentoId" class="form-control" placeholder="Informe a lancamento" value="<?= $jogo->lancamento ?>">
                    <div id="helperLancamento" class="form-text">Informe a lancamento</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="criticaId" class="form-label">Crítica</label>
                    <input type="text" name="critica" id="criticaId" class="form-control" placeholder="Informe a crítica" value="<?= $jogo->critica ?>">
                    <div id="helpercritica" class="form-text">Informe a crítica</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4">
                    <?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <script src="js/base64.js"></script>
</body>

</html>