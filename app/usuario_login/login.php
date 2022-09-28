<?php
session_start();
include_once '../pdo/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Um bot que le fornecera ajuda" />

  <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon" />

  <!-- [JS] -->
  <script src="../script/script.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../css/root.css">
  <link rel="stylesheet" href="./css/form_style.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <title>Login</title>
</head>

<section class="container">
  <!-- MENU-BOTÕES-TOPO -->
  <header></header>

  <aside class="aside_esquerdo">
    <!-- SESSAO DO USUARIO -->
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

  <main class="conteudo_login">
    <section class="box">
      <section class="box_image">
        <img class="image_login" src="../../image/icon/image_login.svg" alt="image_login" />
      </section>
      <section class="box_form">
        <h2>Fazer Login</h2>
        <?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['enviarLogin'])) {

  $sql = "SELECT * FROM usuario WHERE email = :email LIMIT 1";

  $usuario = $conexao->prepare($sql) ;
  $usuario-> bindParam(':email', $dados['email'],PDO::PARAM_STR);
  $usuario->execute();

  if($usuario AND ($usuario->rowCount()!=0)){
    $linha_usuario = $usuario->fetch(PDO::FETCH_ASSOC);
  
    if (password_verify($dados['password'],$linha_usuario['password'])) {
      $_SESSION['id']= $linha_usuario['id'];
      $_SESSION['nome']= $linha_usuario['nome'];
      $_SESSION['foto']= $linha_usuario['foto'];
      header("Location: ../home_dash.php");
    } else {
      $_SESSION['msg']="<br><p style='color:red' >Usuário ou senha inválido!</p>";
    }
    

  }else{
    $_SESSION['msg']="<br><p style='color:red' >Usuário ou senha inválido!</p>";
  };

  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
}


?>


        <form action="" method="POST">
          <section class="input_group">
            <label for="email">E-mail</label>
            <input type="email" id="iemail" name="email" placeholder="Digite seu email" required />
          </section>
          <section class="input_group">
            <label for="senha">Senha</label>
            <input type="password" id="isenha" name="password" placeholder="Digite sua senha" required />
          </section>

          <section class="input_group">
            <input class="button" type="submit" value="Entrar" name="enviarLogin">
          </section>
        </form>
      </section>
    </section>
  </main>

  <!-- ----------------------FIM MAIN---------------------- -->

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