<?php
session_start();
require_once "../pdo/conexao.php";

//Verifica se propriedade ID existe
$id = isset($_GET['id']) ? $_GET['id'] : redireciona("Sem ID");
//Verifica se a propriedade ID não está vazia
(!empty($_GET['id'])) ? "" : redireciona("Sem ID");
//Recebe e filtra a propriedade ID
$idFilter = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'$id'");

/* VERFICAR A NECESSIDA DESTE CODIGO */
//Caso tenha erro retorna para LISTAR
function redireciona($erro)
{
    header('Location: ../usuarios_listar/usuarios_listar.php');
    echo json_encode($erro);
}

$sql = "DELETE FROM usuario WHERE id = :id ";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':id', $idFilter, PDO::PARAM_STR);
//Retorna um booleano caso deleta ou não
if ($resultado->execute()) {
    $sucesso = ['status' => 'true', 'msg' => 'Usuário excluido com sucesso!'];
    echo json_encode($sucesso);
}
else {
    $falha =['status' => 'false', 'msg' => 'Não foi possível excluir o usuário!'];
    echo json_encode($falha);
}
