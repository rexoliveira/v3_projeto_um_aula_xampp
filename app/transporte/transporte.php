<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="../../image/icon/smart-city.png"
      type="image/x-icon"
    />
    <!-- [JS] -->
    <!-- OBS.: "dados_transportes.js" tem que estar antes de "script_dados_transportes.js" -->
    <script src="dados_transportes.js" defer></script>
    <script src="lista_dados_transportes.js" defer></script>
    <script src="../script/data_hora.js" async></script>
    <script src="../script/script.js" async></script>

    <!-- [CSS] -->
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/table_style.css" />
    <link rel="stylesheet" href="./css/data_hora_style.css" />


    <title>Transporte</title>
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

      <main class="conteudo_table">
        <h1 class="title_iti">Itinerário dos Ônibus</h1>
        <section class="container-data-hora">
          <h2 id="data-hora"></h2>
        </section>

        <table class="content-table">
          <thead>
            <tr class="linha1">
              <th>Linha</th>
              <th>Horário/Chegada</th>
              <th>Horário/Saída</th>
              <th>Empresa</th>
              <th>Dia/Semana</th>
            </tr>
          </thead>
          <tbody>
            <!-- É gerado por script -->
          </tbody>
        </table>
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
