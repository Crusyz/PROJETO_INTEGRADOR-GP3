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

function fnADM($id)
{
    $con = getConnection();

    $sql = "select * from login where id = 1";

    $stmt = $con->prepare($sql);
    $stmt->bindParam("1", $id);

    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    return null;
}