<?php
session_start();
require_once "../pdo/conexao.php";

$nome = isset($_POST['nome']) ? $_POST['nome'] : redireciona("name:nome");
$email = isset($_POST['email']) ? $_POST['email'] : redireciona("name:email");
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : redireciona("name:telefone");
$password = isset($_POST['senha']) ? $_POST['senha'] : redireciona("neme:senha");

function redireciona($erro)
{
  $_SESSION['erros'] = "Erro: $erro";
  header('Location: cadastro.php');
}


$nomeFilter = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'nome'");
$emailFilter = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)?? redireciona("Erro na entrada -'email'");;
$telefoneFilter = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING)?? redireciona("Erro na entrada -'telefone'");;
$passwordFilter = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)?? redireciona("Erro na entrada -'senha'");;

$array = filter_input_array(INPUT_POST);
foreach ($array as $chave => $valor) {
  if (empty($valor)) {
    redireciona("Campo $chave vazio!");
  }
  ;
}

$sql = 'INSERT INTO usuario (nome, email, tel, password) VALUES(:nome,:email,:telefone,:password )';

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':nome', $nomeFilter, PDO::PARAM_STR);
$resultado->bindParam(':email', $emailFilter, PDO::PARAM_STR);
$resultado->bindParam(':telefone', $telefoneFilter, PDO::PARAM_STR);
$passwordHash = password_hash($passwordFilter, PASSWORD_DEFAULT);
$resultado->bindValue(':password', $passwordHash, PDO::PARAM_STR);
$resultado->execute();
$_SESSION['erros'] = "";

//Retorna o ID 
$chave = $conexao->lastInsertId();

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
  <script src="cadastro.js" defer></script>
  <script src="../usuario_apaga/apagarUsuario.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../root.css">
  <link rel="stylesheet" href="./usuarios_card_cadastra.css">
  <link rel="stylesheet" href="style.css" />

  <title>Confirma Cadastro</title>
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
        <a href="cadastro.php">
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
        <h1 class="tit_confirma_cadastro">Confirma cadastro</h1>
      </section>
    </header>

    <main>
      <?php

      $sql = "SELECT * FROM usuario WHERE id=:id";
           
      $resultado = $conexao->prepare($sql);
      $resultado->bindParam(':id',$chave);
      $resultado->execute();
      
      $sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC);
      

      $id = !empty($sql_conteudo['id'])?$sql_conteudo['id']:"";
      $nome = !empty($sql_conteudo['nome'])?$sql_conteudo['nome']:"";
      $email = !empty($sql_conteudo['email'])?$sql_conteudo['email']:"";
      $tel = !empty($sql_conteudo['tel'])?$sql_conteudo['tel']:"";

        echo "<section class='cartao'>";
        echo "<h2 id='avisoDelete'></h2>";
          echo "<h2 class='edicao-sucesso'>Cadastro de " . $_POST['nome'] . " efetudo com sucesso!</h2>";
        
          echo "<section class='c-card'>";

            echo "<section class='c-card_image'>";

              echo"<a href='../usuario_edita/edita.php?id=$id' class='btn_editar'>
              <span class='material-symbols-outlined'> edit </span></a>";
              /* Não faz sentido estar aqui - reavaliação futura */
              /* echo"<a href='#' class='btn_delete' onclick='apagarUsuario($id)'>
              <span class='material-symbols-outlined'> delete </span></a>"; */
              echo "<img class='imagem'src='../../image/avatar/0.png' alt='image avatar'>";
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
        <section class="perfil">
          <button id="menu-button">
            <span class="material-symbols-outlined"> menu </span>
          </button>

          <div class="info">
            <p>Oi, <strong>Rodrigo Oliveira</strong></p>
            <small class="texto_base_card">Administrador</small>
          </div>

          <div class="perfil-foto">
            <img src="../../image/avatar/rodrigo-oliveira.jpg" alt="avatar" />
          </div>

          <!-- href="../page/principal.php" DE TESTE AJUSTAR -->
          <a href="#">
            <span id="logout" class="material-symbols-outlined">
              logout
            </span>
            <!-- <h3>Logout</h3> -->
          </a>
        </section>
        <!-- ######################PERFIL##########################▲ -->
      </section>
    </aside>
  </section>
</body>

</html>