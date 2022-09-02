<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Um bot que le fornecera ajuda" />

    <link
      rel="shortcut icon"
      href="../image/icon/smart-city.png"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/bot_style.css" />
    <link rel="stylesheet" href="../style/form_style.css" />
    <link rel="stylesheet" href="../style/login_style.css" />
    <!-- <link rel="stylesheet" href="../style/reset_css_style.css"> -->
    <title>Login</title>
  </head>

  <body class="body_login">
    <!-- Cabeçalho -->
    <header class="bot">
      <section class="logo_title">
        <img class="logo" src="../image/icon/smart-city-200.png" alt="" />

        <h1 class="title">Login</h1>

        <section class="home">
          <a href="principal.php"
            ><img
              id="image_home"
              class="image_home"
              src="..\image\icon\house.png"
              alt="home"
          /></a>
          <label class="image_home_title" for="image_home">Home</label>
        </section>
      </section>
    </header>

    <main class="conteudo_login">
      <section class="box">
        <section class="box_image">
          <img
            class="image_login"
            src="../image/icon/image_login.png"
            alt="image_login"
          />
        </section>
        <section class="box_form">
          <h2>Fazer Login</h2>
          <p>
            Se não for menbro!<!-- <a href="#">Login</a> --><button
              class="button_cadas_login"
              type="button"
            >
              <a class="cabecalho_menu_item" href="../page/cadastro.php"
                >Cadastra-se!</a
              >
            </button>
          </p>
          <form action="#">
            <section class="input_group">
              <label for="email">E-mail</label>
              <input
                type="email"
                id="email"
                placeholder="Digite seu email"
                required
              />
            </section>
            <section class="input_group">
              <label for="senha">Senha</label>
              <input
                type="password"
                id="senha"
                placeholder="Digite sua senha"
                required
              />
            </section>

            <section class="input_group">
              <button>Entrar</button>
            </section>
          </form>
        </section>
      </section>
    </main>

    <footer class="rodape">
      <section class="rodape_title">
        <h1 class="rodape_title_texto">SmartCityCamaquã</h1>
      </section>

      <section class="rodape_credito">
        <a
          href="https://www.youtube.com/watch?v=Y6jNn0K-4c8&ab_channel=MatheusManuel"
        >
          <h1 class="rodape_credito_texto">
            Crédito: Matheus Manuel (YouTube: FORMULÁRIO DE CADASTRO RESPONSIVO
            | Página de cadastro | HTML E CSS )
          </h1>
        </a>
      </section>
    </footer>
  </body>
</html>
