<?php
require_once('Repository/JogoRepository.php');
$nome = filter_input(INPUT_POST, 'nomeJogo', FILTER_SANITIZE_SPECIAL_CHARS);

header("location: listagem-de-jogos.php?nome={$nome}");
exit;