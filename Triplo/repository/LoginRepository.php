<?php

require_once('Connection.php');

function fnLogin($email, $senha)
{
    $con = getConnection();

    $sql = "select id, email, created_at as createdAt from login where email = :pEmail and senha = :pSenha";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}

function fnAddLogin($email, $senha)
{
    $con = getConnection();

    $sql = "insert into login (email, senha) values (:pEmail, :pSenha)";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    return $stmt->execute();
}

function fnAtualizaSenha($email, $senha)
{
    $con = getConnection();

    $sql = "update login set senha = :pSenha where email = :pEmail";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pEmail", $email);
    $stmt->bindValue(":pSenha", md5($senha));

    if ($stmt->execute()) {
        return true;
    }

    return false;
}