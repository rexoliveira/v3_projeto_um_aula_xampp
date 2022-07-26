<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="../../image/icon/smart-city-200.png" type="image/x-icon" />

  <!-- [JS] -->
  <!--Script abaixo faz parte da configuração de valida email- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../registro/verifica_email.js" defer></script>
  <script src="../script/valida_email.js" defer></script>
  <script src="../script/valida_senha.js" defer></script>
  <script src="../script/script.js" defer></script>
  <script src="../script/mascaras.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../css/root.css">
  <link rel="stylesheet" href="./css/form_style.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <title>Cadastro-port</title>
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
          <img class="image_cadastro" src="../../image/icon/image_cadastro.png" alt="image_cadastro" />
        </section>
        <section class="box_form">
          <section class="texto_acima_form">
            <h2>Criar Conta</h2>
            <p>
              Já é um menbro?
              <!-- <a href="#">Login</a> --><button class="button_cadas_login" type="button">
                <a class="cabecalho_menu_item" href="">Login</a>
              </button>
            </p>
          </section>
          <section>
            <!-- <span class="erro"><?php /* echo $_SESSION['erros'];  */?></span> -->
          </section>
          <form name="cadastro_form" id="iform_cadastro" action="processa.php" method="POST" enctype="multipart/form-data">
            <section class="input_group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"
              required
               />
            </section>
            <section class="input_group">
              <label for="email">E-mail</label>
              <input type="email" id="iemail" name="email" placeholder="Digite seu email" required
              />
              <span id="ialert_email"></span>
              <span id="iresposta"></span>
            </section>
            <section class="input_group">
              <label for="telefone">Telefone</label>
              <input type="text" id="itelefone" name="telefone" onkeypress="mask(this, mphone);"
                onblur="mask(this, mphone);" th:value="${usuario.telefone}" placeholder="(00) 00000-0000" required
               />
            </section>
            <section class="input_group w50">
              <label for="senha">Senha</label>
              <input type="password" id="isenha" name="senha" placeholder="Digite sua senha" required />
            </section>
            <section class="input_group w50 c_senha">
              <label for="confirmar_senha">Confirmar a Senha</label>
              <input type="password" id="iconfirma_senha" name="confirma_senha" placeholder="Confirme a senha" required
                />
            </section>
            <section class="input_group foto">
              <label for="foto">Foto</label>
              <input class="foto" type="file" id="ifoto" name="foto"/>
            </section>
            <section class="input_group">
              <button type="submit" >Cadastrar</button>
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