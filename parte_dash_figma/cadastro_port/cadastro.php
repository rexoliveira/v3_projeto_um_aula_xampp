<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon" />


  <!--Script abaixo faz parte da configuração de valida email- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="mascaras.js" defer></script>
  <script src="valida_senha.js" defer></script>
  <script src="validate_email.js" defer></script>
  <script src="cadastro.js" defer></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="form_style.css" />
  <link rel="stylesheet" href="style.css" />


  <!-- MATERIAL CDN - ICONS DO GOOGLE -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


  <!-- MODAL -->
  <!-- <script src="../contato_modal/modal.js" defer></script> -->
  <!-- <link rel="stylesheet" href="../contato_modal/modal.css" /> -->

  <title>Cadastro-port</title>
</head>

<body>
  <!-- <section id="todo-modal">
    <button id="abrir-modal" >Abrir</button>

    A transparência que divide o modal do conteudo de baixo
    <section class="hide" id="fade"></section>

    <section class="hide" id="modal-iframe">
      <section class="modal-cabecalho">
        <h2>Este é modal</h2>
        <button id="fechar-modal">Fechar</button>
      </section>
      <section class="modal-corpo">
        <iframe src="../contato_modal/contato_modal.php" frameborder="0"></iframe>
      </section>
    </section>
  </section> -->
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
        <a href="../dash_figma.php">
          <span class="material-symbols-outlined"> space_dashboard </span>
          <h3>Retornar a Dashboard</h3>
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
          <form name="cadastro_form" id="form_cadastro" action="processa.php" method="POST">
            <section class="input_group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"
              required
               />
            </section>
            <section class="input_group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" placeholder="Digite seu email" required
              />
              <span id="alert_email"></span>
            </section>
            <section class="input_group">
              <label for="telefone">Telefone</label>
              <input type="text" id="telefone" name="telefone" onkeypress="mask(this, mphone);"
                onblur="mask(this, mphone);" th:value="${usuario.telefone}" placeholder="(00) 00000-0000" required
               />
            </section>
            <section class="input_group w50">
              <label for="senha">Senha</label>
              <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
            </section>
            <section class="input_group w50 c_senha">
              <label for="confirmar_senha">Confirmar a Senha</label>
              <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Confirme a senha" required
                />
            </section>
            <section class="input_group">
              <button onclick="fechaAviso()" type="submit" >Cadastrar</button>
            </section>
          </form>
        </section>
      </section>
    </main>

    <!-- ----------------------FIM MAIN---------------------- -->

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
          <a href="../page/principal.php">
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