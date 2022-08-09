<?php

require_once('Repository/JogoRepository.php');
session_start();

if (fnDeleteJogo($_SESSION['id'])) {
    $msg = "Sucesso ao apagar";
} else {
    $msg = "Falha ao apagar";
}

unset($_SESSION['id']);

$page = "listagem-de-jogos.php";
setcookie('notify', $msg, time() + 10, "/loja/{$page}", 'localhost');
header("location: {$page}");
exit;