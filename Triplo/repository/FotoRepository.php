<?php
/*require_once('Connection.php');



function fnAddCliente($fb1, $fb2, $fb3, $fb4, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12)
{
    $con = getConnection();

    $sql = "insert into cliente (fb1, fb2, fb3, fb4, f1, f2, f3, f4, f5, f6, f7, f8, f9, f9, f10, f11, f12) values (:pFb1, :pFb2, :pFb3, :pFb4, :F1, :F2, :F3, :F4, :F5, :F6, :F7, :F8, :F9, :F10, :F11, :F12)";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(":pFb1", $fb1);
    $stmt->bindParam(":pFb2", $fb2);
    $stmt->bindParam(":pFb3", $fb3);
    $stmt->bindParam(":pFb4", $fb4);
    $stmt->bindParam(":F1", $f1);
    $stmt->bindParam(":F2", $f2);
    $stmt->bindParam(":F3", $f3);
    $stmt->bindParam(":F4", $f4);
    $stmt->bindParam(":F5", $f5);
    $stmt->bindParam(":F6", $f6);
    $stmt->bindParam(":F7", $f7);
    $stmt->bindParam(":F8", $f8);
    $stmt->bindParam(":F9", $f9);
    $stmt->bindParam(":F10", $f10);
    $stmt->bindParam(":F11", $f11);
    $stmt->bindParam(":F12", $f12);

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