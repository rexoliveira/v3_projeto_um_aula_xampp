<?php
session_start();
require_once "../PDO/conexao.php";
#Verifica se tem um email para pesquisa

$emailFilter = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? "";
$sql = "SELECT * FROM usuario WHERE email = :email LIMIT 1";

// $emailFilter = "'%".$emailFilter."%'";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':email',$emailFilter, PDO::PARAM_STR);
$resultado->execute();
$sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC);
//Caso exista retorna o ID
$id = !empty($sql_conteudo['id'])?$sql_conteudo['id']:"";
#Se o retorno for maior do que zero, diz que já existe um.
if (!empty($id)){
    echo json_encode(['email' => 'Mas, já existe um usuário cadastrado com este email','id'=>$id]);
}else{
    echo json_encode(['email' => '']);
}
?>