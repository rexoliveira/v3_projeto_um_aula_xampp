<?php
require_once("config.php");

$servidor = DB_HOST;
$porta = DB_PORT;
$bancoDeDados = DB_DATABASE_NAME;
$usuario = DB_USERNAME;
$senha = DB_PASSWORD;

try {
    $dsn = "pgsql:host=$servidor;port=$porta;dbname=$bancoDeDados;";
$conexao = new PDO($dsn, $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if ($conexao) {
        //echo "Conectado ao banco de dados $db com sucesso!";
    }
}
catch (PDOException $e) {
    die($e->getMessage());
}

