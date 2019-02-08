<?php
$dsn = 'mysql=dbname=clientes;host=127.0.0.1';
$user = 'robert';
$psw = 'basededatos';

try
{
    $pdo = new PDO($dsn, $user, $psw);
}
catch(PDOException $error)
{
    echo 'error al conectar' . $error->getMessage();
}
?>