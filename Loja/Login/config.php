<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');

if (!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login']))) {
    $page = "errorPage.php";
    setcookie('notify', 'Falha ao efetuar o login', time() + 10, "../{$page}", 'localhost');
    header("location: ../{$page}");
    exit;
}