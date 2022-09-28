<?php
session_start();
require_once "../pdo/conexao.php";
function redireciona($erro)
{
  $_SESSION['erros'] = "Erro: $erro";
  header('Location: ../usuarios_listar/usuarios_listar.php');
}

$id = isset($_GET['id']) ? $_GET['id'] : redireciona("Sem ID");
(!empty($_GET['id']))?"":redireciona("Sem ID");
$idFilter = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING, FILTER_FLAG_NONE) ?? redireciona("Erro na entrada -'id'");

$sql = "SELECT id, nome, email, tel, password FROM usuario WHERE id = :id LIMIT 1";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':id', $idFilter, PDO::PARAM_STR);
$resultado->execute();
$_SESSION['erros'] = ""; 


$usuario = $resultado->fetch(PDO::FETCH_ASSOC);
extract($usuario);
$id_edita = is_string($id) ? $id :"erro - sem id";
$nome_edita = is_string($nome) ? $nome :"erro - sem nome";
$email_edita = is_string($email) ? $email :"erro - sem email";
$tel_edita = is_string($tel) ? $tel :"erro - sem telefone";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link
      rel="shortcut icon"
      href="../../image/icon/smart-city-200.png"
      type="image/x-icon"
    />

  <!-- [JS] -->
  <!--Script abaixo faz parte da configuração de valida email- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Verifica se e-mail já não está cadastrado -->
  <script src="../registro/registro.js" defer></script>
  <script src="../script/valida_email.js" defer></script>
  <script src="../script/valida_senha.js" defer></script>
  <script src="../script/mascaras.js" defer></script>
  <script src="../script/script.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../css/root.css">
  <link rel="stylesheet" href="./css/form_style.css" />
  <link rel="stylesheet" href="./css/style.css" />
  
  <title>Edita usuário</title>
</head>

<body>
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

    <!-- ----------------------FIM DO ASIDE---------------------- -->

    <main>
      <section class="box">
        <section class="box_image">
          <img class="image_cadastro" src="../../image/icon/image_editar.png" alt="image_cadastro" />
        </section>
        <section class="box_form">
          <section class="texto_acima_form">
            <h2>Edita usuário</h2>
            <!-- <p>
              Já é um menbro?
              <a href="#">Login</a><button class="button_cadas_login" type="button">
                <a class="cabecalho_menu_item" href="">Login</a>
              </button>
            </p> -->
          </section>
          <section>
            <!-- <span class="erro"><?php /* echo $_SESSION['erros'];  */?></span> -->
          </section>
          <form name="edita_form" id="form_edita" action="processa.php" method="POST">
          <section class="input_group">
              <input style="display:none" type="text" id="id" name="id"
              value='<?php echo "$id_edita"?>'
              required
               />
            </section>
            <section class="input_group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"
              value='<?php echo "$nome_edita"?>'
              minlength="5"
              maxlength="30"
              required
               />
            </section>
            <section class="input_group">
              <label for="email">E-mail</label>
              <input type="email" id="iemail" name="email" placeholder="Digite seu email"
              value='<?php echo "$email_edita"?>' 
              required
              />
              <span id="ialert_email"></span>
              <span id="iresposta"></span>
            </section>
            <section class="input_group">
              <label for="telefone">Telefone</label>
              <input type="text" id="telefone" name="telefone" onkeypress="mask(this, mphone);"
                onblur="mask(this, mphone);" th:value="${usuario.telefone}" placeholder="(00) 00000-0000" 
                value='<?php echo "$tel_edita"?>'
                minlength="14"
                maxlength="15"
                required
               />
            </section>
            <section class="input_group w50">
              <label for="senha">Senha</label>
              <input type="password" id="isenha" name="senha" placeholder="Digite sua senha"/>
            </section>
            <section class="input_group w50 c_senha">
              <label for="confirmar_senha">Confirmar a Senha</label>
              <input type="password" id="iconfirma_senha" name="confirma_senha" placeholder="Confirme a senha" 
                />
            </section>
            <section class="input_group">
              <button onclick="fechaAviso()" type="submit" >Alterar</button>
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