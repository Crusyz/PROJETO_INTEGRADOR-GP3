<?php
require_once('Connection.php');

#CRUD produto

function fnAddJogo($nome, $foto, $descricao, $tipo, $req, $lancamento, $critica, $preco, $link, $destaque)
{
    $con = getConnection();

    $sql = "insert into jogos (nome, foto, descricao, tipo, req, lancamento, critica, preco, link, destaque) values (:pNome, :pFoto, :pDescricao, :pTipo, :pReq, :pLancamento, :pCritica, :pPreco, :pLink, :pDestaque)";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pFoto", $foto);
    $stmt->bindParam(":pDescricao", $descricao);
    $stmt->bindParam(":pTipo", $tipo);
    $stmt->bindParam(":pReq", $req);
    $stmt->bindParam(":pLancamento", $lancamento);
    $stmt->bindParam(":pCritica", $critica);
    $stmt->bindParam(":pPreco", $preco);
    $stmt->bindParam(":pLink", $link);
    $stmt->bindParam(":pDestaque", $destaque);

    return $stmt->execute();
}

function fnListJogos()
{
    $con = getConnection();

    $sql = "select * from jogos";

    $result = $con->query($sql);

    $lstjogos = array();
    while ($jogo = $result->fetch(PDO::FETCH_OBJ)) {
        array_push($lstjogos, $jogo);
    }

    return $lstjogos;
}

function fnLocalizaJogoPorDestaque($destaque)
{

    $con = getConnection();

    $sql = "select * from jogos where destaque = 'Sim'";

    $stmt = $con->prepare($sql);

    $stmt->bindValue("'Sim'", $destaque);

    if ($stmt->execute()) {
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }
}

function fnLocalizaJogoPorNome($nome)
{
    $con = getConnection();

    $sql = "select * from jogos where nome like :pNome limit 20";

    $stmt = $con->prepare($sql);

    $stmt->bindValue(":pNome", "%{$nome}%");

    if ($stmt->execute()) {
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }
}

function fnLocalizaJogoPorId($id)
{
    $con = getConnection();

    $sql = "select * from jogos where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}

function fnUpdateJogo($id, $nome, $foto, $descricao, $tipo, $req, $lancamento, $critica, $preco, $link, $destaque)
{
    $con = getConnection();

    $sql = "update jogos set nome = :pNome, foto = :pFoto, descricao = :pDescricao, tipo = :pTipo, req = :pReq, lancamento = :pLancamento, critica = :pCritica, preco = :pPreco, link = :pLink, destaque = :pDestaque where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pFoto", $foto);
    $stmt->bindParam(":pDescricao", $descricao);
    $stmt->bindParam(":pTipo", $tipo);
    $stmt->bindParam(":pReq", $req);
    $stmt->bindParam(":pLancamento", $lancamento);
    $stmt->bindParam(":pCritica", $critica);
    $stmt->bindParam(":pPreco", $preco);
    $stmt->bindParam(":pLink", $link);
    $stmt->bindParam(":pDestaque", $destaque);

    return $stmt->execute();
}

function fnDeleteJogo($id)
{
    $con = getConnection();

    $sql = "delete from jogos where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    return $stmt->execute();
}