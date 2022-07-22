<?php

require_once "../php/conexao.php";
$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$where = isset($_GET['palavraFiltro']) ? $_GET['palavraFiltro'] : "";
if ($filtro != "" && $where != "todos") {
    $sql = "SELECT * FROM usuario WHERE $where LIKE '%$filtro%' ORDER BY nome";
} else {
    $sql = "SELECT * FROM usuario";
};
$consulta = pg_query($conexao, $sql);
$registros = pg_num_rows($consulta);
pg_close($conexao) ?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon">
    <!-- fonte de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="..\\style\\style.css" />
    <link rel="stylesheet" href="..\\style\\bot_style.css" />

    <link rel="stylesheet" href="..\\style\\menu_lateral_style.css" />

    <link rel="stylesheet" href="..\\style\\usuarios_cards.css">

    <title>Usuários</title>
</head>

<body class=" body">
    <!-- Cabeçalho -->
    <header class="header">

        <section class="Sobre">

            <section class="logo_title">
                <img class="logo" src="../image/icon/smart-city-200.png" alt="">
                <h1 class="title"> Usuários</h1>
                <section class="logo_sub_title">
                    <ul class="menu">
                        <section class="but_log">
                            <button class="button log" type="button">
                                <a class="item_menu" href="login.php"><span
                                        class="material-icons">person</span>Login</a>
                            </button>
                            <button class="button log" type="button">
                                <a class="item_menu" href="cadastro.php">Cadastra-se</a>
                            </button>
                        </section>

                        <section class="home">
                            <a href="principal.php"><img id="image_home" class="image_home"
                                    src="..\image\icon\house.png" alt="home"></a>
                            <label class="image_home_title" for="image_home">Home</label>
                        </section>
                    </ul>
                </section>

            </section>
    </header>


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
                <input class="botao_filtro" type="submit" value="Filtrar">
            </form>
        </section>

        <?php
        if ($where == 'email') {
            $n_filtro = 'E-mail';
        } elseif ($where == 'nome') {
            $n_filtro = "Nome";
        } elseif ($where == 'tel') {
            $n_filtro = "Celular";
        }
        if ($filtro != "" && $where != "todos") {
            print "<h5>Resultado do filtro \"$n_filtro\" contendo \"$filtro\". </h5>";
        }else{
            print "<h5>Escolha outro filtro no lugar de \"todos\" para uma informação específica. </h5>";
        }
        print '<section class="l-cards">';
        /* print "<h2>$registros resgistros encontrados.</h2>" */
        while ($exibirRegistro = pg_fetch_array($consulta)) {

            $id = $exibirRegistro[0];
            $nome = $exibirRegistro[1];
            $email = $exibirRegistro[2];
            $tel = $exibirRegistro[3];


            /* print "<article>";
            print "<h4>Dados do Cliente </h4>";
            print "<h3>ID: $id - Nome: $nome</h3> ";
            print "<h3>E-mai: $email - Celular: $tel</h3>"; */
            print "<article class=\"c-card\">";
            print "<section class=\"c-card_image\">";
            print "<img class=\"imagem\"src=\"https://as1.ftcdn.net/v2/jpg/01/71/25/36/1000_F_171253635_8svqUJc0BnLUtrUOP5yOMEwFwA8SZayX.jpg\" alt=\"image placeholder\">";
            print "</section>";
            print "<section class=\"c-card_content\">";

            print "<span class=\"u-text-placeholder\" style=\"width: 30%\"><h2>$nome</h2></span>";

            print " <span class=\"u-text-placeholder\" style=\"width: 85%\"><h2>$email</h2></span>";
            print "<span class=\"u-text-placeholder\" style=\"width: 60%\"><h2>$tel</h2></span>";
            print "</section>";
            print "</article>";
        }
        print "</section>";

        /* mysqli_close($conexao) */

        ?>
    </main>

    <footer class="rodape">
        <section class="rodape_title">
            <h1 class="rodape_title_texto"> SmartCityCamaquã</h1>
        </section>

        <section class="rodape_credito">
            <a href="https://www.youtube.com/watch?v=llF6vD-RljE&ab_channel=RafaellaBallerini">
                <h1 class="rodape_credito_texto"> Crédito: Rafaella Ballerini (YouTube: LANDING PAGE COM HTML e CSS!)
                </h1>
            </a>
        </section>

    </footer>

</body>


</section>

</html>