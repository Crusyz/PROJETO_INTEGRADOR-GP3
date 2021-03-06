<?php require_once('../Repository/LoginRepository.php'); ?>
<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">

    <head>
        <title>Loja Games</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="../css/estilo.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/index.css" type="text/css" media="screen" />

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
                <a class="navbar-brand" href="../index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Catálogo</a>
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
                            <a class="nav-link active" aria-current="page" href="../cadastro.html">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar na loja" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="contents">
        <div class="restrito">
            <form name="form_restrito" action="loginSistema.php" method="post" class="form">
                <h3>Acesso ao sistema</h3>
                <br>
                <label>Informe o seu email:</label>
                <br>
                <input type="email" name="email" placeholder="Digite o seu email" required>
                <br><br>
                <label>Informe sua senha:</label>
                <br>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
                <br><br>


                <input type="submit" value="ENVIAR" name="enviar">
                <input type="reset" value="LIMPAR" name="limpar">

                <div name="notify" class="form-text text-capitalize fs-4" style="color: red;">
                    <?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>

            </form>
        </div>
    </div>

</html>