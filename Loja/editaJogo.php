<?php
require_once('repository/JogoRepository.php');
require_once('util/base64.php');
session_start();

$id = filter_input(INPUT_POST, 'idJogo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$lancamento = filter_input(INPUT_POST, 'lancamento', FILTER_SANITIZE_SPECIAL_CHARS);
$critica = filter_input(INPUT_POST, 'critica', FILTER_SANITIZE_SPECIAL_CHARS);

$foto = converterBase64($_FILES['foto']);

if (fnUpdateJogo($id, $nome, $foto, $descricao, $lancamento, $critica)) {
    $msg = "Sucesso ao gravar";
} else {
    $msg = "Falha na gravação";
}

$_SESSION['id'] = $id;
$page = "formulario-edita-jogo.php";
setcookie('notify', $msg, time() + 10, "loja/{$page}", 'localhost');
header("location: {$page}");
exit;