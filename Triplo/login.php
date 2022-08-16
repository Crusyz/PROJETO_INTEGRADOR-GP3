<?php
include('config.php');
require_once('repository/LoginRepository.php');

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
            h3,
            label {
                color: white;
            }
        </style>
    </head>

<body>

    <?php include('navbar.php'); ?>
    <div class="contents">
        <div class="restrito">
            <fieldset>
                <legend style="color: white;">Login</legend>
                <form action="loginSistema.php" method="post" class="form" enctype="multipart/form-data">
                    <div class="mb-3 form-group">
                        <label for="emailId" class="form-label">Email</label>
                        <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o email">
                        <div id="helperEmail" class="form-text">Informe o email</div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="senhaId" class="form-label">Senha</label>
                        <input type="password" name="senha" id="senhaId" class="form-control" placeholder="Informe a senha">
                        <div id="helperSenha" class="form-text">Informe a senha</div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-dark">Login</button>
                        <a href="forgot-password.php">Recuperar a senha</a>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>

</html>