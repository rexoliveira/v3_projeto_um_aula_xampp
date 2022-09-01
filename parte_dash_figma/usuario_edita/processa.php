<?php
session_start();
require_once "conexao.php";

$id = isset($_POST['id']) ? $_POST['id'] : redireciona("id:id");
$nome = isset($_POST['nome']) ? $_POST['nome'] : redireciona("name:nome");
$email = isset($_POST['email']) ? $_POST['email'] : redireciona("name:email");
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : redireciona("name:telefone");
$password = isset($_POST['senha']) ? $_POST['senha'] : redireciona("neme:senha");

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
  header('Location: ../usuarios_port/usuarios-port.php');
  die();
}

if(!empty($passwordFilter)){
$sql = 'UPDATE public.usuario SET  nome=:nome, email=:email, tel=:telefone, password=:password WHERE id=:id';
}else{
  $sql = 'UPDATE public.usuario SET  nome=:nome, email=:email, tel=:telefone WHERE id=:id';
} 

/* PDO */
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':id', $idFilter, PDO::PARAM_STR);
$resultado->bindParam(':nome', $nomeFilter, PDO::PARAM_STR);
$resultado->bindParam(':email', $emailFilter, PDO::PARAM_STR);
$resultado->bindParam(':telefone', $telefoneFilter, PDO::PARAM_STR);
(!empty($passwordFilter))?$resultado->bindValue(':password', $passwordFilter, PDO::PARAM_STR):"";
$resultado->execute();
$_SESSION['erros'] = ""
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />

  <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon" />

  <!-- MATERIAL CDN - ICONS DO GOOGLE -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- [CSS] -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="usuarios_card_edita.css" />

  <!-- [JS] -->
  <!-- Se sua tag de script estiver na cabeça, o JavaScript será
      carregado antes do seu HTML, 
      portanto, o elemento que você está tentando acessar ainda não existe no DOM. 
      Você precisará adicionar deferao seu script -->
  <script src="../menu_topo.js" defer></script>
  <script src="edita.js" defer></script>
  <!-- async = Você faz um carregamento assíncrono, ou seja, sem bloquear a página -->
  <script src="../../script/data_hora.js" async></script>

  <link rel="stylesheet" href="style.css" />

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
        <a href="../dash_figma.php">
          <span class="material-symbols-outlined"> space_dashboard </span>
          <h3>Retornar a Dashboard</h3>
        </a>
        <a href="cadastro.php">
          <span class="material-symbols-outlined"> person_add </span>
          <h3>Cadastra Usuário</h3>
        </a>
        <a href="../usuarios_port/usuarios-port.php">
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
      
      $sql = "SELECT * FROM usuario WHERE id=:id";
           
      $resultado = $conexao->prepare($sql);
      $resultado->bindParam(':id',$_POST['id']);
      $resultado->execute();
      
        echo "<section class='cartao'>";
          echo "<h2 class='edicao-sucesso'>Edição de " . $_POST['nome'] . " efetudo com sucesso!</h2>";
          $sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC);
        
          $id = $_POST['id'];
          $nome = $sql_conteudo['nome'];
          $email = $sql_conteudo['email'];
          $tel = $sql_conteudo['tel'];
        
          echo "<section class='c-card'>";

            echo "<section class='c-card_image'>";

              echo"<a href='../usuario_edita/edita.php?id=$id' class='btn_editar'>
              <span class='material-symbols-outlined'> edit </span></a>";
              echo"<a href='' class='btn_delete'>
              <span class='material-symbols-outlined'> delete </span></a>";
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