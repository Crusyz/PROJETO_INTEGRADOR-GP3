<?php
include('config.php');
require_once('repository/JogoRepository.php');
require_once('repository/LoginRepository.php');
require_once('validadorAdmin.php');
$id = $_SESSION['id'];
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
    div,
    label {
        color: white;
    }
    </style>

</head>

<body>
    <?php include('navbar.php'); ?>
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
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome"
                        value="<?= $jogo->nome ?>">
                    <div id="helperNome" class="form-text">Informe o nome</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="descricaoId" class="form-label">Descrição</label>
                    <input type="text" name="descricao" id="descricaoId" class="form-control"
                        placeholder="Informe a descrição" value="<?= $jogo->descricao ?>">
                    <div id="helperDescricao" class="form-text">Informe a descrição</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="tipoId" class="form-label">Tipo</label>
                    <input type="text" name="tipo" id="tipoId" class="form-control" placeholder="Informe o tipo"
                        value="<?= $jogo->tipo ?>">
                    <div id="helperTipo" class="form-text">Informe o tipo</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="linkId" class="form-label">Requisitos minimos</label>
                    <input type="text" name="req" id="reqId" class="form-control"
                        placeholder="Informe os requisitos minimos" value="<?= $jogo->req ?>">
                    <div id="helperLink" class="form-text">Informe os Requisitos minimos</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="lancamentoId" class="form-label">Lançamento</label>
                    <input type="text" name="lancamento" id="lancamentoId" class="form-control"
                        placeholder="Informe a lancamento" value="<?= $jogo->lancamento ?>">
                    <div id="helperLancamento" class="form-text">Informe o lancamento</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="criticaId" class="form-label">Crítica</label>
                    <input type="text" name="critica" id="criticaId" class="form-control"
                        placeholder="Informe a crítica" value="<?= $jogo->critica ?>">
                    <div id="helperCritica" class="form-text">Informe a crítica</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="precoId" class="form-label">Preço</label>
                    <input type="number" name="preco" id="precoId" class="form-control" placeholder="Informe o preço"
                        value="<?= $jogo->preco ?>">
                    <div id="helperPreco" class="form-text">Informe o Preço</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="linkId" class="form-label">Link</label>
                    <input type="url" name="link" id="linkId" class="form-control" placeholder="Informe o link"
                        value="<?= $jogo->link ?>">
                    <div id="helperLink" class="form-text">Informe o link</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="destaqueId" class="form-label">É Destaque?</label>
                    <input type="text" maxlength="3" name="destaque" id="destaqueId" class="form-control"
                        placeholder="Informe Sim ou Não" value="<?= $jogo->destaque ?>">
                    <div id="helperDestaque" class="form-text">Informe se é destaque</div>
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