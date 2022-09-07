<?php
session_start();
require_once "../pdo/conexao.php";

//Verifica se propriedade ID existe
$id = isset($_GET['id']) ? $_GET['id'] : redireciona("Sem ID");
//Verifica se a propriedade ID não está vazia
(!empty($_GET['id'])) ? "" : redireciona("Sem ID");
//Recebe e filtra a propriedade ID
$idFilter = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'id'");

/* VERFICAR A NECESSIDA DESTE CODIGO */
//Caso tenha erro retorna para LISTAR
function redireciona($erro)
{
    $_SESSION['erros'] = "Erro: $erro";
    header('Location: ../usuarios_listar/usuarios-listar.php');
}

$sql = "DELETE FROM public.usuario WHERE id = :id ";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':id', $idFilter, PDO::PARAM_STR);
//Retorna um booleano caso deleta ou não
if ($resultado->execute()) {
    $sucesso = ['status' => 'true', 'msg' => 'Usuário apagado com sucesso!'];
    echo json_encode($sucesso);
    $_SESSION['erros'] = "";
}
else {
    $falha =['status' => 'false', 'msg' => 'Não foi possível apagar o usuário!'];
    echo json_encode($falha);
}
