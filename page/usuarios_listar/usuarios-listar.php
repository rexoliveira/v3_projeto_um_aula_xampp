<?php
session_start();
require_once "../PDO/conexao.php";

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$where = isset($_GET['palavraFiltro']) ? $_GET['palavraFiltro'] : "";

if ($filtro != "" && $where != "todos") {
  $sql = "SELECT * FROM usuario WHERE $where LIKE '%$filtro%' ORDER BY nome";
}
else {
  $sql = "SELECT * FROM usuario ORDER BY nome;";
}
;

/* PDO */
$resultado = $conexao->prepare($sql);
$resultado->execute();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon" />


  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css" />

  <!-- MATERIAL CDN - ICONS DO GOOGLE -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="usuarios_cards.css">

  <script src="../usuario_apaga/apagarUsuario.js" defer></script>
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
        <a href="../dash_figma.php">
          <span class="material-symbols-outlined"> space_dashboard </span>
          <h3>Retornar a Dashboard</h3>
        </a>
        <a href="../cadastro_port/cadastro.php">
          <span class="material-symbols-outlined"> person_add </span>
          <h3>Cadastra Usuário</h3>
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
  print "<h5>Resultado do filtro '$n_filtro' contendo '$filtro'. </h5>";
}
else {
  print "<h5>Escolha outro filtro no lugar de 'todos' para uma informação específica. </h5>";
}
echo "<h2 id='avisoDelete'></h2>";

print "<section class=\"cartoes\">";

$contadorImg = 0;
while ($sql_conteudo = $resultado->fetch(PDO::FETCH_ASSOC)) {

  $contadorImg++;

  $id = $sql_conteudo['id'];
  $nome = $sql_conteudo['nome'];
  $email = $sql_conteudo['email'];
  $tel = $sql_conteudo['tel'];

  print "<article class='c-card'>";

  print "<section class='c-card_image'>";

  /* print "<img class='imagem'src='https://as1.ftcdn.net/v2/jpg/01/71/25/36/1000_F_171253635_8svqUJc0BnLUtrUOP5yOMEwFwA8SZayX.jpg' alt='image placeholder'>"; */
  print "<a href='../usuario_edita/edita.php?id=$id' class='btn_editar'><span class='material-symbols-outlined'> edit </span></a>";
  print "<a href='#' class='btn_delete' onclick='apagarUsuario($id)'><span class='material-symbols-outlined'> delete </span></a>";
  print "<img class='imagem'src='../../image/avatar/${contadorImg}.png' alt='image avatar'>";

  print "</section>";

  print "<section class='c-card_content'>";

  print "<span class='u-text-placeholder' ><h2 class='dados'>$nome</h2></span>";
  print " <span class='u-text-placeholder' ><h2 class='dados'>$email</h2></span>";
  print "<span class='u-text-placeholder' ><h2 class='dados'>$tel</h2></span>";
  print "<a href='' class='btn_detalhes'><span class='material-symbols-outlined'> loupe </span></a>";

  print "</section>";

  print "</article>";
}

print "</section>";

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