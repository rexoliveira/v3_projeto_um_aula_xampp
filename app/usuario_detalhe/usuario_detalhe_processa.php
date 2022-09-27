<?php
session_start();
require_once "../pdo/conexao.php";

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

    $sql = "SELECT id, nome,tel, email FROM usuario WHERE id = :id LIMIT 1";

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':id',$id,PDO::PARAM_INT);
    $resultado->execute();
    $dados = $resultado->fetch(PDO::FETCH_ASSOC);

    $retorna = ['erro' => false,'dados'=> $dados, 'msg'=>"<div>Usuário encontrado!</div>"];
} else {
    $retorna = ['erro' => true, 'msg'=>"Usuário não encontrado!"];
}


echo  json_encode($retorna);
?>