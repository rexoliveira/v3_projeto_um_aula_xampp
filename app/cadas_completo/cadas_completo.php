<?php
session_start();
?>

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
  <!--Script abaixo faz parte da configuração de valida email- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="script_cadas_completo.js" defer></script>
  <script src="../registro/verifica_email.js" defer></script>
  <script src="../script/valida_email.js" defer></script>
  <script src="../script/valida_senha.js" defer></script>
  <script src="../script/mascaras.js" defer></script>
  <script src="../script/script.js" defer></script>

  <!-- [CSS] -->
  <link rel="stylesheet" href="../css/root.css">
  <link rel="stylesheet" href="./css/style_cadas_completo.css">
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
    <section class="containerCadastroCompleto">
      <h1>Formulário</h1>
      <section class="progress-bar">
        <div class="step">
          <h2>Nome</h2>
          <div class="bullet">
            <span>1</span>
          </div>
          <span class="check material-symbols-outlined">
            done
            </span>
        </div>
        <div class="step">
          <h2>Contato</h2>
          <div class="bullet">
            <span>2</span>
          </div>
          <span class="check material-symbols-outlined">
            done
            </span>
        </div>
        <div class="step">
          <h2>Data</h2>
          <div class="bullet">
            <span>3</span>
          </div>
          <span class="check material-symbols-outlined">
            done
            </span>
        </div>
        <div class="step">
          <h2>Enviar</h2>
          <div class="bullet">
            <span>4</span>
          </div>
          <span class="check material-symbols-outlined">
            done
            </span>
        </div>
      </section>
      <section class="form-outer">

        <form action="#" name="cadastro_completo">

          <section class="pagina slide-pagina">

            <label class="title">Informação básica:</label>
            <div class="entrada">
              <label for="primeiroNome" class="label">Primeiro nome</label>
              <input id="ipnome" type="text" name="primeiroNome" placeholder="Digite o primeiro nome">
            </div>

            <div class="entrada">
              <label for="sobreNome" class="label">Sobrenome</label>
              <input id="isnome" type="text" name="sobreNome" placeholder="Digite o segundo nome">
            </div>

            <div class="entrada">
              <button type="submit" class="firstNext next" aria-label="Próximo">Próximo</button>
            </div>
          </section>

          <section class="pagina">

            <label class="title">Informações de contato</label>
            <div class="entrada">
              <label for="email" class="label">Endereço de e-mail</label>
              <input id="iemail" type="email" name="email" placeholder="Digite seu e-mail">
            </div>

            <div class="entrada">
              <label for="telefone" class="label">Número de telefone</label>
              <input id="itelefone" type="tel" name="telefone" placeholder="(00) 00000-0000">
            </div>

            <div class="entrada btns">
              <button class="prev-1 prev">Anterior</button>
              <button class="next-1 next">Próximo</button>
            </div>

          </section>

          <section class="pagina">

            <label class="title">Nascimento:</label>
            <div class="entrada">
              <label for="nascimento"  class="label">Data</label>
              <input id="inascimento" type="date" name="nascimento">
            </div>

            <div class="entrada">
              <label for="genero" class="label">Gênero</label>
              <select>
                <option>Outro nenhum</option>
                <option>Masculino</option>
                <option>Feminino</option>
              </select>
            </div>

            <div class="entrada btns">
              <button class="prev-2 prev">Anterior</button>
              <button class="next-2 next">Próximo</button>
            </div>

          </section>

          <section class="pagina">

            <label class="title">Senha:</label>
            <div class="entrada">
              <label for="senha" class="label">Senha</label>
              <input id="isenha" type="password" name="senha" placeholder="Digite sua senha">
            </div>

            <div class="entrada">
              <label for="confirmeSenha" class="label">Confirme a Senha</label>
              <input id="iconfirmeSenha" type="password" name="confirmeSenha" placeholder="Repita sua senha">
            </div>

            <div class="entrada btns">
              <button class="prev-3 prev">Anterior</button>
              <button class="submit">Enviar</button>
            </div>

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