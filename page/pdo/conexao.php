<?php
/* $servidor = "ec2-3-219-229-143.compute-1.amazonaws.com";
$porta = 5432;
$bancoDeDados = "d8r7j0jch56qj4";
$usuario = "skmpjtptrfsukp";
$senha = "48fc0ade9ef49d7f2742a0ce5498e7f82ba47f699bb0133cb5a0a07a361c4786"; */
$servidor = "127.0.0.1";
$porta = 5432;
$bancoDeDados = "usuarios";
$usuario = "postgres";
//$senha = "postgres";//Banco IFSUL
$senha = "12070205";
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

