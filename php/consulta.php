<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$where = isset($_GET['palavraFiltro']) ? $_GET['palavraFiltro'] : "";


if ($filtro != "todos" && $where != "") {
    $sql = "SELECT * FROM usuario WHERE $where LIKE '%$filtro%' ORDER BY NOME";
} {
    $sql = "SELECT * FROM usuario";
};

$consulta = pg_query($conexao, $sql);
$registros = pg_num_rows($consulta);

pg_close($conexao)
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />

    <script src="scripts/mascaras.js" async></script>

    <title>Consulta de Cliente</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="index.php">
                    <li>Cadastro</li>
                </a>
            </ul>
        </nav>
        <section>
            <img src="image/favicon.png" alt="imagem-tecnologia" />
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
        if ($filtro != "") {
            print "<h5>Resultado do filtro \"$where\" contendo \"$filtro\". </h5>";
        }
        /* print "<h2>$registros resgistros encontrados.</h2>" */
        while ($exibirRegistro = pg_fetch_array($consulta)) {

            $id = $exibirRegistro[0];
            $nome = $exibirRegistro[1];
            $email = $exibirRegistro[2];
            $tel = $exibirRegistro[3];


            print "<article>";
            print "<h4>Dados do Cliente </h4>";
            print "<h3>ID: $id - Nome: $nome</h3> ";


            print "<h3>E-mai: $email - Celular: $tel</h3>";
        }

        /* mysqli_close($conexao) */

        ?>

    </main>

    <footer></footer>
</body>

</html>