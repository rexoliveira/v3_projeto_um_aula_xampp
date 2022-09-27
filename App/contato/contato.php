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
    <script src="../script/script.js" defer></script>

    <!-- [CSS] -->
    <link rel="stylesheet" href="../root.css">
    <link rel="stylesheet" href="contato.css" />
    <link rel="stylesheet" href="style.css">
    
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

    <!-- ----------------------FIM DO ASIDE---------------------- -->
  <main id="contato">
    <section class="container-contato">
      <section class="conteudo">
        <section class="aside-esquerdo-contato">
          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> location_on </span>
            <h2 class="topico">Endereço</h2>
            <h2 class="texto-um">Nome da rua, numero123</h2>
            <h2 class="texto-dois">Bairro Cidade</h2>
          </section>

          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> call </span>
            <h2 class="topico">Telefone</h2>
            <h2 class="texto-um">+00 00 12345 6789</h2>
            <h2 class="texto-dois">+00 00 12345 6789</h2>
          </section>

          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> mail </span>
            <h2 class="topico">E-mail</h2>
            <h2 class="texto-um">email@dominio.com...</h2>
            <h2 class="texto-dois">email@dominio.com...</h2>
          </section>
        </section>

        <section class="aside-direito-contato">
          <h1 class="topico-texto">Envie sua mensagem</h1>

          <form action="envio_email.php" method="POST">
            
            <section id="nome">
              <!-- disabled - não envia os dados somente o "readonly" -->
              <input
                type="text"
                name="nome"
                id="inome"
                readonly
                value="Rodrigo Oliveira"
              />
              <label for="inome" class="label"> 
                <span class="material-symbols-outlined" id="nome_icon">
                  person
                </span>
                Nome
              </label>
            </section>

            <section id="email">
              <input
                type="email"
                name="email"
                id="iemail"
                placeholder="email@dominio.com..."
              />
              <label for="iemail" class="label">
                <span class="material-symbols-outlined" id="contact_mail">
                  contact_mail
                </span>
                Endereço de e-mail
              </label>
            </section>

            <section id="assunto">
              <input
                type="text"
                name="assunto"
                id="iassunto"
                placeholder="assunto..."
              />
              <label for="iassunto" class="label">
                <span class="material-symbols-outlined" id="subject">
                  subject
                </span>
                Assunto
              </label>
            </section>
            <section id="mensagem">
              <textarea
                name="mensagem"
                id="imensagem"
                cols="30"
                rows="10"
                placeholder="Escreva aqui sua mensagem..."
              ></textarea>
              <label for="imensagem" class="label">
                <span class="material-symbols-outlined" id="sticky_note_2">
                  sticky_note_2
                </span>
                Mensagem
              </label>
            </section>
            <section id="botao">
              <input type="submit" value="Enviar" name="enviar" />
            </section>
          </form>
        </section>
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
