<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="../../image/icon/smart-city.png"
      type="image/x-icon"
    />
    <!-- [JS] -->
    <script src="./github_gist.js" defer></script>

    <!-- [CSS] -->
    <link rel="stylesheet" href="../root.css">
    <link rel="stylesheet" href="style.css">
    <script src="./gist.js" defer></script>

    <title>Contato</title>
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
<main>
<section class="gists">
    <article>
        <h1 class="titulo">Curso de Dart/Flutter Proz</h1>
        <p class ="descricao">Semana-5 [Clases e programazação orientada a onjetos]</p>
        <h2 class="subtitulo" >Code Park - 1</h2>
        
        <section id="script" >

        <script src="https://gist.github.com/rexoliveira/47629864f94eb512b3fb5ca6887f602d.js" ></script>
        
        <h2 class="subtitulo-sub" >Code Park - 2</h2>
        
        <script src="https://gist.github.com/rexoliveira/8b08f73588df135cd93ca2cb477ed31a.js"></script>
        
        <h2 class="subtitulo-sub" >Code Park - 3</h2>
        
        <script src="https://gist.github.com/rexoliveira/126a0f6b91812a9a2bcc3c366c2e7cf6.js"></script>

        <h2 class="subtitulo-sub" >Code Park - 4</h2>
        
        <script src="https://gist.github.com/rexoliveira/10320e3de750446b71534c1d0c8e8530.js"></script>

        <p class ="descricao">Semana-6 [Git/GitHub]</p>
        <h2 class="subtitulo" >Code Park - 1</h2>

        <script src="https://gist.github.com/rexoliveira/f894485f5f187a0b5f7c862d3e169bea.js"></script>

        <h2 class="subtitulo" >Code Park - 2</h2>

        <script src="https://gist.github.com/rexoliveira/24635ae057c411b0448895f5da9ba785.js"></script>
        </section>
    </article>
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