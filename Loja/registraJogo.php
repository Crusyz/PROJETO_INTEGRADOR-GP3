<?php

require_once('repository/JogoRepository.php');
require_once('util/base64.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$lancamento = filter_input(INPUT_POST, 'lancamento', FILTER_SANITIZE_NUMBER_INT);
$critica = filter_input(INPUT_POST, 'critica', FILTER_SANITIZE_NUMBER_FLOAT);

$foto = converterBase64($_FILES['foto']);

if (empty($foto) || empty($nome) ||  empty($descricao) || empty($lancamento) || empty($critica)) {
    $msg = "Preencher todos os campos primeiro.";
} else {
    if (fnAddJogo($nome, $foto, $descricao, $lancamento, $critica)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }
}

$page = "formulario-cadastro-jogo.php";
setcookie('notify', $msg, time() + 10, "loja/{$page}", 'localhost');
header("location: {$page}");
exit;