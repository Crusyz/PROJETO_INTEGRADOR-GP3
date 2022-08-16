<?php
include('config.php');
require_once('repository/JogoRepository.php');
require_once('repository/LoginRepository.php');

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

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
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Lançamento</th>
                    <th>Crítica</th>
                    <th>Preço</th>
                    <th>Data cadastro</th>
                    <?php if ($condicao) : ?>
                    <th colspan="2">Gerenciar</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach (fnLocalizaJogoPorNome($nome) as $jogo) : ?>
                <tr>
                    <td style="background-color: white;"><?= $jogo->id ?></td>
                    <td style="background-color: white;"><?= $jogo->nome ?></td>
                    <td style="background-color: white;"><?= $jogo->tipo ?></td>
                    <td style="background-color: white;"><?= $jogo->lancamento ?></td>
                    <td style="background-color: white;"><?= $jogo->critica ?></td>
                    <td style="background-color: white;"><?= $jogo->preco ?></td>
                    <td style="background-color: white;"><?= $jogo->created_at ?></td>
                    <?php if ($condicao) : ?>
                    <td style="background-color: white;"><a href="#"
                            onclick="gerirUsuario(<?= $jogo->id ?>, 'edit');">Editar</a></td>
                    <td style="background-color: white;"><a href="#"
                            onclick="return confirm('Deseja realmente excluir?') ? gerirUsuario(<?= $jogo->id ?>, 'del') : '';">Excluir</a>
                    </td>
                    <?php endif; ?>
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
    <?php if ($condicao) : ?>
    <div>
        <button type="submit" class="btn btn-dark"><a style="color: white; text-decoration: none;"
                href="formulario-cadastro-jogo.php">Cadastrar Novo
                Jogo</a></button>
    </div>
    <?php endif; ?>
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

        url = 'excluirJogo.php';
        if (action === 'edit')
            url = 'formulario-edita-jogo.php';

        window.location.href = url;
    }
    </script>
</body>

</html>