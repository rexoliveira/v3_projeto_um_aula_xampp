<?php
require_once '../../config.php';

$db_type = DB_TYPE;
$db_host = DB_HOST;
$db_port = DB_PORT;
$db_name = DB_DATABASE_NAME;
$db_user = DB_USERNAME;
$db_pass = DB_PASSWORD;


try {
	$dsn = "$db_type:host=$db_host;port=$db_port;dbname=$db_name;";
	// make a database connection
	$conexao = new PDO($dsn, $db_user, $db_pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($conexao) {
		//echo "Conectado ao DATABASE [$db_name] com sucesso!";
	}
} catch (PDOException $e) {
	die($e->getMessage());
} 