<?php
require_once('Connection.php');

# CRUD cliente

function fnAddCliente($nome, $email, $senha)
{
    $con = getConnection();

    $sql = "insert into cliente (nome, email, senha) values (:pNome,  :pEmail, :pSenha)";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    return $stmt->execute();
}

function fnListClientes()
{
    $con = getConnection();

    $sql = "select * from cliente";

    $result = $con->query($sql);

    $lstClientes = array();
    while ($cliente = $result->fetch(PDO::FETCH_OBJ)) {
        array_push($lstClientes, $cliente);
    }

    return $lstClientes;
}

function fnLocalizaClientePorNome($nome)
{
    $con = getConnection();

    $sql = "select * from cliente where nome like :pNome limit 20";

    $stmt = $con->prepare($sql);

    $stmt->bindValue(":pNome", "%{$nome}%");

    if ($stmt->execute()) {
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }
}

function fnLocalizaClientePorId($id)
{
    $con = getConnection();

    $sql = "select * from cliente where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}

function fnUpdateCliente($id, $nome, $email, $senha)
{
    $con = getConnection();

    $sql = "update cliente set nome = :pNome, email = :pEmail, senha = :pSenha where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);
    $stmt->bindParam(":pNome", $nome);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    return $stmt->execute();
}

function fnDeleteCliente($id)
{
    $con = getConnection();

    $sql = "delete from cliente where id = :pID";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pID", $id);

    return $stmt->execute();
}