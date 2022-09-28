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
        <form action="#">
          <section class="input_group">
            <label for="email">E-mail</label>
            <input type="email" id="iemail" placeholder="Digite seu email" required />
          </section>
          <section class="input_group">
            <label for="senha">Senha</label>
            <input type="password" id="isenha" placeholder="Digite sua senha" required />
          </section>

          <section class="input_group">
            <button>Entrar</button>
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