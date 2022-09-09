<?php
session_start();
require_once('../pdo/conexao.php');

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$where = isset($_GET['palavraFiltro']) ? $_GET['palavraFiltro'] : "";

if ($filtro != "" && $where != "todos") {
  $sql = "SELECT * FROM usuario WHERE $where LIKE '%$filtro%' ORDER BY nome";
}
else {
  $sql = "SELECT * FROM usuario ORDER BY nome;";
}
;

$resultado = $conexao->prepare($sql);
$resultado->execute();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="../../image/icon/smart-city-200.png" type="image/x-icon" />


  <!-- [CSS] -->
  <link rel="stylesheet" href="../root.css">
  <link rel="stylesheet" href="../usuario_detalhe/usuario_detalhe_modal.css">
  <link rel="stylesheet" href="usuarios_cards.css">
  <link rel="stylesheet" href="style.css" />


  <!-- [JS] -->
  <script src="../usuario_detalhe/usuario_detalhe.js" defer></script>
  <script src="../usuario_detalhe/usuario_detalhe_modal.js"async></script>
  <script src="../usuario_apaga/apagarUsuario.js" defer></script>
  <script src="../reset_banco/processa_json.js" defer></script>
  <script src="script.js" defer></script>

  <title>Lista de usuários</title>
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
        <a href="#" onclick="genioFullScreen()" id="btn">
          <span class="material-symbols-outlined"> fullscreen </span>
          <h3>Tela Grande</h3>
        </a>
        <a href="#" onclick="confirmarReset()" style="color:red">
          <span class="material-symbols-outlined"> restart_alt </span>
          <h3>RESET_BANCO</h3>
        </a>
        <div class="tema-toggler" id="tema-toggler">
          <span class="material-symbols-outlined"> light_mode </span>
          <span class="material-symbols-outlined active"> dark_mode </span>
        </div>
      </section>
    </aside>

    <!-- ----------------------FIM DO ASIDE---------------------- -->

    <main>

      <section class="formF">
        <form id="form_filtro" action="" method="get">
          <label id="label_filtro" for="filtro">Filtrar por</label>
          <select class="palavraFiltro" name="palavraFiltro" id="palavra">
            <option value="todos">todos</option>
            <option value="email">E-mail</option>
            <option value="nome">Nome</option>
            <option value="sobrenome">Sobrenome</option>
            <option value="tel">Celular</option>
          </select>
          <input class="filtro" type="text" name="filtro" id="filtro" autofocus>
          <input id="botao_filtro" class="item_menu" type="submit" value="Filtrar">
        </form>
      </section>
      <?php

if ($where == 'email') {
  $n_filtro = 'E-mail';
}
elseif ($where == 'nome') {
  $n_filtro = "Nome";
}
elseif ($where == 'tel') {
  $n_filtro = "Celular";
}
if ($filtro != "" && $where != "todos") {
  echo "<h5>Resultado do filtro '$n_filtro' contendo '$filtro'. </h5>";
}
else {
  echo "<h5>Escolha outro filtro no lugar de 'todos' para uma informação específica. </h5>";
}
echo "<h2 id='avisoDelete'></h2>";

echo "<a href='#' id='btn_detalhes_abrir' class='btn_detalhes' onclick='detalharUsuario(0)'>Detalhar usuário<span class='material-symbols-outlined'> loupe </span></a>";
echo '<section id="modal-detalhe-usuario" class="modal">';

include_once('../usuario_detalhe/usuario_detalhe_modal.php');

echo "</section>";



echo "<section class='cartoes'>";

$contadorImg = 0;
while ($sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC)) {

  $contadorImg++;

  $id = $sql_conteudo['id'];
  $nome = $sql_conteudo['nome'];
  $email = $sql_conteudo['email'];
  $tel = $sql_conteudo['tel'];

  echo "<article class='c-card'>";

  echo "<section class='c-card_image'>";

  echo "<a href='../usuario_edita/edita.php?id=$id' class='btn_editar'><span class='material-symbols-outlined'> edit </span></a>";
  echo "<a href='#' class='btn_delete' onclick='apagarUsuario($id)'><span class='material-symbols-outlined'> delete </span></a>";
  echo "<img class='imagem'src='../../image/avatar/${contadorImg}.png' alt='image avatar'>";

  echo "</section>";

  echo "<section class='c-card_content'>";

  echo "<span class='u-text-placeholder' ><h2 class='dados'>$nome</h2></span>";
  echo " <span class='u-text-placeholder' ><h2 class='dados'>$email</h2></span>";
  echo "<span class='u-text-placeholder' ><h2 class='dados'>$tel</h2></span>";
  echo "<a href='#'id= 'iloupe' class='btn_detalhes' onclick='detalharUsuario($id)'><input type='checkbox' id='toggle-1'><span class='material-symbols-outlined'> loupe </span></a>";

  echo "</section>";

  echo "</article>";
}

echo "</section>";

?>
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