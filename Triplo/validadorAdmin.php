<?php
$admin = ($_SESSION['login'] == fnLogin('admin@triplo.com', 'admin@123'));

if (!$admin) {
    setcookie('error', 'Somente Admin do site', $expire, 'loja/errorPage.php', 'localhost', isset($_SERVER['HTTPS']), true);
    header("location: errorPage.php");
}