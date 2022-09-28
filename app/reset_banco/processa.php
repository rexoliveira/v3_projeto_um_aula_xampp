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
    }
    else {
      $sql = "ALTER TABLE usuario AUTO_INCREMENT = 1";
    }

    if ($db_type == "pgsql") {
      $sql = strval($myArray[$i]['acao']);
    }

    $resultado = $conexao->prepare($sql);

    $resultado->execute();

    
  };
}
//=========================================================


//Listamos o diretório e removemos os pontos da lista
$listDiretorio = array_diff(
  scandir('../image/foto_perfil/'),
  ['.', '..']
);

//Percorremos todos os itens da nossa lista
foreach($listDiretorio as $diretorio){
  $path = '../image/foto_perfil/' . $diretorio;

  $isDir = is_dir($path) ? 'Diretorio' : 'Arquivo';

  if($isDir == 'Diretorio' ){
    $dir = dir($path);
    chmod ($path, 755);

    while($arquivo =  $dir -> read()){
      if (!is_dir($path.'/'.$arquivo)) {
        unlink($path.'/'.$arquivo);
      }
      }
    rmdir($path);
  }
};
echo ("<br>Banco de teste reiniciado com " . $i - 2 . " itens!Aguarde 3 segundos...");
