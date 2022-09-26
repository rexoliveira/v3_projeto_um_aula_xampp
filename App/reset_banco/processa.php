<?php
session_start();
require_once "../pdo/conexao.php";
//O arquivo recebe o Json tranformado em String do index
$conteudo = file_get_contents("php://input");

//Converte para um Objeto
$myArray = json_decode($conteudo, true);

for ($i = 0; $i < count($myArray); $i++) {
  if (!empty($myArray)) {
    $sql = strval($myArray[$i]['acao']);
    $resultado = $conexao->prepare($sql);
    $resultado->execute();
  }
  ;
}
echo ("<br>Banco de teste reiniciado com " . $i+1 ." itens!Aguarde 3 segundos...");


