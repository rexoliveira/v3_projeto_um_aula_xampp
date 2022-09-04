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
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />

    <link
      rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"
    />

    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <!-- partial -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,300,700"
      rel="stylesheet"
      type="text/css"
    />

    
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    
    <link rel="stylesheet" href="./menu_topo/menu_topo.css" />
    <link rel="stylesheet" href="./chat_bot/chat_bot_modal.css">
    <link rel="stylesheet" href="style.css" />
    
    <script src="./menu_topo/menu_topo.js" defer></script>
    <script src="chat_bot/chat_bot_modal.js" defer></script>
    <script src="script.js" defer></script>
    <script src="servicos.js"></script>
    <script src="data_hora.js"></script>
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
          <!-- blog-drop-down -->
          <?php include_once("./menu_topo/blog-drop-down.php") ?>
          <!-- images-drop-down -->
          <?php include_once("./menu_topo/images-drop-down.php") ?>
          <!-- ============================================================= -->
          <li>
            <a href="./contato/contato.php"
              ><i class="fa fa-envelope"></i> Contato</a
            >
          </li>
          <li>
            <a href="#" id="abrir-modal"
              ><i class="fa fa-envelope"></i> Chat Bot</a
            >
          </li>
          <a href="#" class="toggle-menu visible-xs-block">|||</a>
        </ul>
  
</body>
</html>