<?php
session_start();
require_once "../pdo/conexao.php";

$id = isset($_POST['id']) ? $_POST['id'] : redireciona("id:id");
$nome = isset($_POST['nome']) ? $_POST['nome'] : redireciona("name:nome");
$email = isset($_POST['email']) ? $_POST['email'] : redireciona("name:email");
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : redireciona("name:telefone");
$password = isset($_POST['senha']) ? $_POST['senha'] : redireciona("neme:senha");
$foto = isset($_FILES['foto']) ? $_FILES['foto'] : redireciona("name:foto");

$array = filter_input_array(INPUT_POST);

foreach ($array as $chave => $valor) {
  //Exemplo- [$array['telefone']) < 14] -> (51) 0000-2300
  if (empty($valor) && strlen($array['telefone']) < 14) {
    redireciona("Campo $chave vazio!");
  };
}

$idFilter = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'id'");
$nomeFilter = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'nome'");
$emailFilter = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)?? redireciona("Erro na entrada -'email'");;
$telefoneFilter = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING)?? redireciona("Erro na entrada -'telefone'");;
$passwordFilter = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)?? redireciona("Erro na entrada -'senha'");
function redireciona($erro)
{
  $_SESSION['erros'] = "Erro: $erro";
  header('Location: ../usuarios_listar/usuarios_listar.php');
  die();
}

if(!empty($passwordFilter)){
$sql = 'UPDATE usuario SET  nome=:nome, email=:email, tel=:telefone, password=:password WHERE id=:id';
}else{
  $sql = 'UPDATE usuario SET  nome=:nome, email=:email, tel=:telefone WHERE id=:id';
} 

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':id', $idFilter, PDO::PARAM_STR);
$resultado->bindParam(':nome', $nomeFilter, PDO::PARAM_STR);
$resultado->bindParam(':email', $emailFilter, PDO::PARAM_STR);
$resultado->bindParam(':telefone', $telefoneFilter, PDO::PARAM_STR);
(!empty($passwordFilter))?$resultado->bindValue(':password', $passwordFilter, PDO::PARAM_STR):"";

$resultado->execute();
$_SESSION['erros'] = "";

//==================================================================

if (isset($foto['name']) and (!empty($foto['name']))) {

$path = $foto['full_path'];
$extension = pathinfo($path, PATHINFO_EXTENSION);
$nome_arquivo = $id .".". $extension;

$diretorio = "../image/foto_perfil/$id/";  

//Lista e exclui a imagem anterior
$file = glob($diretorio . '/*');
if(!empty($file[0])  and is_file($file[0])) {unlink($file[0]); };


!is_dir($diretorio)? mkdir($diretorio, 0755):"";

move_uploaded_file($foto['tmp_name'],$diretorio . $nome_arquivo);
  
$sql = "UPDATE usuario SET foto = :edita_foto WHERE id = $id";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':edita_foto', $foto['name'], PDO::PARAM_STR);
$resultado->execute();

}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />

  <link
      rel="shortcut icon"
      href="../../image/icon/smart-city.png"
      type="image/x-icon"
    />

  <!-- [JS] -->
  <script src="../usuario_deleta/usuario_deleta.js"defer></script>
  <script src="edita.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../css/root.css">
  <link rel="stylesheet" href="./css/usuarios_card_edita.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <title>Confirma Edição</title>
</head>

<body>
  <section class="container">
    <!-- MENU-BOTÕES-TOPO -->
    <header></header>

    <aside class="aside_esquerdo">
      <!-- SESSAO DO USUARIO -->
      <section class="sessao_usuario_topo">
        <!-- LOGO-TITULO -->
        <section class="logo">
          <img src="../../image/icon/smart-city-200.png" alt="imagem_logo" />
          <h2>Smart<span class="logo-titulo">Camaquã</span></h2>
        </section>
        <!-- SAIR DA SESSAO -->
        <section class="close" id="close-btn">
          <span class="material-symbols-outlined">close</span>
        </section>
      </section>

      <!-- BARRA-LATERAL-ESQUERDA -->
      <section class="sidebar" id="sidebar">
        <!-- Removido função class="active" -->
        <a href="../home_dash.php">
          <span class="material-symbols-outlined"> space_dashboard </span>
          <h3>Retornar a Dashboard</h3>
        </a>
        <a href="../cadastro/cadastro.php">
          <span class="material-symbols-outlined"> person_add </span>
          <h3>Cadastra Usuário</h3>
        </a>
        <a href="../usuarios_listar/usuarios_listar.php">
          <span class="material-symbols-outlined"> groups </span>
          <h3>Lista Usuários</h3>
        </a>
        <a href="#" onclick="genioFullScreen()" id="btn">
          <span class="material-symbols-outlined"> fullscreen </span>
          <h3>Tela Grande</h3>
        </a>
        <div class="tema-toggler" id="tema-toggler">
          <span class="material-symbols-outlined"> light_mode </span>
          <span class="material-symbols-outlined active"> dark_mode </span>
        </div>
      </section>
    </aside>

    <header>

      <section>
        <!-- <img src="smart-city-200.png" alt="imagem-tecnologia" /> -->
        <h1 class="tit_confirma_cadastro">Confirma Edição</h1>
      </section>
    </header>

    <main>
      <?php
      
      $sql = "SELECT * FROM usuario WHERE id = :id";
           
      $resultado = $conexao->prepare($sql);
      $resultado->bindParam(':id',$_POST['id']);
      $resultado->execute();
      
      $sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC);
      

      $id = !empty($sql_conteudo['id'])?$sql_conteudo['id']:"";
      $nome = !empty($sql_conteudo['nome'])?$sql_conteudo['nome']:"";
      $email = !empty($sql_conteudo['email'])?$sql_conteudo['email']:"";
      $tel = !empty($sql_conteudo['tel'])?$sql_conteudo['tel']:"";
      $foto = !empty($sql_conteudo['foto'])?$sql_conteudo['foto']:"";

      $extension = pathinfo($foto, PATHINFO_EXTENSION);
      
      $ext = (!empty($extension ))?$extension:"jpg";

        echo "<section class='cartao'>";
        echo "<h2 id='avisoDelete'></h2>";
          echo "<h2 class='edicao-sucesso'>Edição de " . $_POST['nome'] . " efetudo com sucesso!</h2>";
        
          echo "<section class='c-card'>";

            echo "<section class='c-card_image'>";

              echo"<a href='../usuario_edita/edita.php?id=$id' class='btn_editar'>
              <span class='material-symbols-outlined'> edit </span></a>";
              echo"<a href='#' class='btn_delete' onclick='deletarUsuario($id)'>
              <span class='material-symbols-outlined'> delete </span></a>";
              echo "<img class='imagem'src='../image/foto_perfil/$id/$id.$ext' alt='image_avatar'>";
              echo "<span class='dados-card id' ><h2 class='dados'>ID: $id</h2></span>";

            echo "</section>";

              echo "<section class='c-card_content'>";

                echo "<span class='dados-card' ><h2 class='dados'>Nome: $nome</h2></span>";
                echo " <span class='dados-card' ><h2 class='dados'>E-mail: $email</h2></span>";
                echo "<span class='dados-card' ><h2 class='dados'>Contato: $tel</h2></span>";
                echo"<a href='' class='btn_detalhes'>
                <span class='material-symbols-outlined'> loupe </span></a>";

              echo "</section>";

          echo "</section>";
        
        echo "</section>";

      ?>
    </main>
    <aside class="aside_direito">
      <section class="sessao_usuario_topo">
        <!-- ######################PERFIL##########################▼ -->
      <?php include_once '../usuario_perfil/usuario_perfil.php'?>
      <!-- ######################PERFIL##########################▲ -->
      </section>
    </aside>
  </section>
</body>

</html>