<?php

require_once "conexao.php";
$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$where = isset($_GET['palavraFiltro']) ? $_GET['palavraFiltro'] : "";
if ($filtro != "" && $where != "todos") {
    $sql = "SELECT * FROM usuario WHERE $where LIKE '%$filtro%' ORDER BY nome";
} else {
    $sql = "SELECT * FROM usuario ORDER BY nome;";
};
$consulta = pg_query($conexao, $sql);
$registros = pg_num_rows($consulta);
pg_close($conexao) ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../image/icon/smart-city-200.png" type="image/x-icon" />

    <link rel="stylesheet" href="../style/dashboard.css">

    <script src="scripts/mascaras.js" defer></script>

    <title>Consulta de Cliente</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="../page/cadastro.php">
                    <li>Cadastro</li>
                </a>
            </ul>
        </nav>
        <section>
            <!-- <img src="../image/icon/smart-city.png" alt="imagem-tecnologia" /> -->
            <h1>Consulta de Cliente</h1>
        </section>
    </header>

    <main>

        <form id="form_filtro" action="" method="get">

            <label id="label_filtro" for="filtro">Filtrar por</label>

            <select name="palavraFiltro" id="palavra">
                <option value="todos">todos</option>
                <option value="email">E-mail</option>
                <option value="nome">Nome</option>
                <option value="sobrenome">Sobrenome</option>
                <option value="tel">Celular</option>
            </select>

            <input type="text" name="filtro" id="filtro" autofocus>

            <input class="botao_filtro" type="submit" value="Filtrar">
        </form>

        <?php
        if ($where == 'email') {
            $n_filtro = 'E-mail';
        } elseif ($where == 'nome') {
            $n_filtro = "Nome";
        } elseif ($where == 'tel') {
            $n_filtro = "Celular";
        }
        if ($filtro != "") {
            print "<h5>Resultado do filtro \"$n_filtro\" contendo \"$filtro\". </h5>";
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
            print "<img src=\"https://as1.ftcdn.net/v2/jpg/01/71/25/36/1000_F_171253635_8svqUJc0BnLUtrUOP5yOMEwFwA8SZayX.jpg\" width=\"100%\" alt=\"image placeholder\">";
            print "</section>";
            print "<section class=\"c-card_content\">";

            print "<span class=\"u-text-placeholder\" style=\"width: 30%\"><h2>Nome: $nome</h2></span>";

            print " <span class=\"u-text-placeholder\" style=\"width: 85%\"><h2>E-mail: $email</h2></span>";
            print "<span class=\"u-text-placeholder\" style=\"width: 60%\"><h2>Telefone: $tel</h2></span>";
            print "</section>";
            print "</article>";
        }
        print "</section>";

        /* mysqli_close($conexao) */

        ?>

    </main>

    <footer></footer>
</body>

</html>