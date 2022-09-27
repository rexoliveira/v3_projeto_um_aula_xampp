<?php
session_start();
require_once "../pdo/conexao.php";
require_once '../../config.php';

$db_type = DB_TYPE;

//O arquivo recebe o Json tranformado em String do index
$conteudo = file_get_contents("php://input");

//Converte para um Objeto
$myArray = json_decode($conteudo, true);

for ($i = 0; $i < count($myArray); $i++) {
  if (!empty($myArray)) {

    
    //Atribui a sintaxe correta para restart serial para MYSQL
    if ($db_type == "mysql" && $i != 1) {
      $sql = strval($myArray[$i]['acao']);
    }else{
      $sql="ALTER TABLE usuario AUTO_INCREMENT = 1";
    }
    
    if ($db_type == "pgsql") {
      $sql = strval($myArray[$i]['acao']);
    }    

    $resultado = $conexao->prepare($sql);

    $resultado->execute();
  }
  ;
}
echo ("<br>Banco de teste reiniciado com " . $i - 2 . " itens!Aguarde 3 segundos...");
