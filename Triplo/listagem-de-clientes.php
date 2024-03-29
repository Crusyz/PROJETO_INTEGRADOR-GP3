<?php
include('config.php');
require_once('repository/ClienteRepository.php');
require_once('repository/LoginRepository.php');
require_once('validadorAdmin.php');
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
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
    </style>

</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="catalogo.php">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="formulario-cadastro-cliente.php">Cadastro</a>
                        </li>
                        <?php if (empty(isset($_SESSION['login']))) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </li>
                        <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                        </li>
                        <?php endif; ?>
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
                    <form class="d-flex" role="search" method="post" action="localiza-cliente.php">
                        <input class="form-control me-2" name="nomeCliente" type="search" placeholder="Buscar na loja"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data cadastro</th>
                    <th colspan="2">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (fnLocalizaClientePorNome($nome) as $cliente) : ?>
                <tr>
                    <td style="background-color: white;"><?= $cliente->id ?></td>
                    <td style="background-color: white;"><?= $cliente->nome ?></td>
                    <td style="background-color: white;"><?= $cliente->email ?></td>
                    <td style="background-color: white;"><?= $cliente->created_at ?></td>
                    <td style="background-color: white;"><a href="#"
                            onclick="gerirUsuario(<?= $cliente->id ?>, 'edit');">Editar</a></td>
                    <td style="background-color: white;"><a href="#"
                            onclick="return confirm('Deseja realmente excluir?') ? gerirUsuario(<?= $cliente->id ?>, 'del') : '';">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if (isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="7"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    <div>
        <button type="submit" class="btn btn-dark"><a style="color: white; text-decoration: none;"
                href="formulario-cadastro-cliente.php">Cadastrar Novo
                Cliente</a></button>
    </div>
    <script>
    window.post = (data) => {
        return fetch(
                'set-session.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }
            )
            .then(response => {
                console.log(`Requisição completa! Resposta:`, response);
            });
    }

    function gerirUsuario(id, action) {

        post({
            data: id
        });

        url = 'excluirCliente.php';
        if (action === 'edit')
            url = 'formulario-edita-cliente.php';
        window.location.href = url;
    }
    </script>
</body>

</html>