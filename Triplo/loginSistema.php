<?php
session_start();

require_once('repository/LoginRepository.php');

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$page = "listagem-de-jogos.php";

if (!$_SESSION['login'] = fnLogin($email, $senha)) {
    session_destroy();
    $page = "errorPage.php";
    $expire = time() + 10;

    setcookie('error', 'Falha ao efetuar o login', $expire, 'loja/errorPage.php', 'localhost', isset($_SERVER['HTTPS']), true);
}

header("location: {$page}");
exit;