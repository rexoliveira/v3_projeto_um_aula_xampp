<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="shortcut icon"
      href="../image/icon/smart-city-200.png"
      type="image/x-icon"
    />
    
    <!-- [JS] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--▼OBS.: Tem ser o caminho assim porque ele carrega um nivel acima -->
    <script src="./chat_bot/chat_bot_modal.js" defer></script>
    <script src="./menu_topo/menu_topo.js" defer></script>
    <script src="dados_servicos.js" defer></script>
    <script src="./script/script.js" defer></script>
    <script src="lista_servicos.js" defer></script>
    <script src="./script/data_hora.js"></script>

    <!-- [CSS] -->
    <!-- ▼Está (bootstrap) aqui e não em "root.css" pq ele altera outras páginas-->
    <!-- ▼Está (bootstrap) MANTER ANTES DE (href="root.css")-->
    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    />
    <!-- ▼O formato href tem ser assim 'root.css', ele carrega na raiz" -->
    <link rel="stylesheet" href="root.css">
    <!-- ▼OBS.: Tem ser o caminho assim porque ele carrega um nivel acima -->
    <link rel="stylesheet" href="./menu_topo/menu_topo.css" />
    <link rel="stylesheet" href="./chat_bot/chat_bot_modal.css">
    <link rel="stylesheet" href="./style.css" />

  <title>Menu Topo</title>
</head>
<body>
<ul class="menu-topo">
          <li>
            <a class="active" href="#" onclick="genioFullScreen()" id="btn"
              ><i class="fa fa-arrows-alt"></i> Tela-grande</a
            >
          </li>
          <li>
            <a href="usuarios_listar/usuarios-listar.php"
            ><i class="fa fa-users"></i> Usuários</a
            >
          </li>
          <li>
            <a href="cadastro/cadastro.php"
            ><i class="fa fa-user-plus"></i> Cadastra Usuário</a
            >
          </li>
          <li>
            <a href="cadas_completo/cadas_completo.php"
            ><i class="fa fa-check-square"></i> Cadastro Detalhado</a
            >
          </li>
          <li>
            <a
            href="transporte/transporte.php"
            ><i class="fa fa-bus"></i> Transporte</a
            >
          </li>
          <!-- ============================================================= -->
          <!-- drop-down -->
          <?php //include_once("./menu_topo/desativado-drop-down.php") ?>
          <!-- mega-drop-down -->
          <?php //include_once("./menu_topo/desativado-mega-drop-down.php") ?>
          <li>
            <a href="./contato/contato.php"
            ><i class="fa fa-envelope"></i> Contato</a
            >
          </li>
          <li>
            <a href="#" id="abrir-modal"
            ><i class="fa fa-comments-o"></i> Chat Bot</a
            >
          </li>
          <li>
            <a href="./github_gist/gist.php" 
            ><i class="fa fa-github-square"></i> GitHub & Gists</a
            >
          </li>
          <!-- blog-drop-down -->
          <?php include_once("./menu_topo/blog-drop-down.php") ?>
          <!-- images-drop-down -->
          <?php include_once("./menu_topo/images-drop-down.php") ?>
          <!-- ============================================================= -->
          <a href="#" class="toggle-menu visible-xs-block">|||</a>
        </ul>
  
</body>
</html>