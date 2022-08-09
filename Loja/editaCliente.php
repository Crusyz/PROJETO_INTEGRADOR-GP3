<?php
require_once('Repository/ClienteRepository.php');

session_start();

$id = filter_input(INPUT_POST, 'idCliente', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



if (fnUpdateCliente($id, $nome, $email, $senha)) {
    $msg = "Sucesso ao gravar";
} else {
    $msg = "Falha na gravação";
}

$_SESSION['id'] = $id;
$page = "formulario-edita-cliente.php";
setcookie('notify', $msg, time() + 10, "loja/{$page}", 'localhost');
header("location: {$page}");
exit;