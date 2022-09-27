<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Um bot que le fornecera ajuda" />

    <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon" />

    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/bot_style.css" />
    <link rel="stylesheet" href="../style/form_style.css" />
    <link rel="stylesheet" href="../style/cadastro_style.css" />

    <!-Script abaixo faz parte da configuração de valida email- -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../script/mascaras.js" defer></script>
        <script src="../script/valida_senha.js" defer></script>

        <script src="../script/validate_email.js" defer></script>
        <title>Cadastra-se</title>
</head>

<body class="body_cadastro">
    <!-- Cabeçalho -->
    <header class="header">


        <section class="logo_title">
            <img class="logo" src="../image/icon/smart-city-200.png" alt="" />

            <h1 class="title">Cadastra-se</h1>
            <section class="home">
                <a href="principal.php"><img id="image_home" class="image_home" src="..\image\icon\house.png"
                        alt="home" /></a>
                <label class="image_home_title" for="image_home">Home</label>
            </section>
        </section>
    </header>

    <main class="conteudo_cadastro">
        <section class="box">
            <section class="box_image">
                <img class="image_cadastro" src="../image/icon/image_cadastro.png" alt="image_cadastro" />
            </section>
            <section class="box_form">
                <h2>Criar Conta</h2>
                <p>
                    Já é um menbro?
                    <!-- <a href="#">Login</a> --><button class="button_cadas_login" type="button">
                        <a class="cabecalho_menu_item" href="../page/login.php">Login</a>
                    </button>
                </p>
                <form name="cadastro_form" id="form_cadastro" action="../php/processa.php" method="POST">
                    <section class="input_group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required />
                    </section>
                    <section class="input_group">

                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu email" required />
                        <span id="alert_email"></span>
                    </section>
                    <section class="input_group">
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" onkeypress="mask(this, mphone);"
                            onblur="mask(this, mphone);" th:value="${usuario.telefone}" placeholder="(00) 00000-0000"
                            required />
                    </section>
                    <section class="input_group w50">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
                    </section>
                    <section class="input_group w50 c_senha">
                        <label for="confirmar_senha">Confirmar a Senha</label>
                        <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Confirme a senha"
                            required />
                    </section>
                    <section class="input_group">
                        <button type="submit">Cadastrar</button>
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
            <a href="https://www.youtube.com/watch?v=Y6jNn0K-4c8&ab_channel=MatheusManuel">
                <h1 class="rodape_credito_texto">
                    Crédito: Matheus Manuel (YouTube: FORMULÁRIO DE CADASTRO RESPONSIVO
                    | Página de cadastro | HTML E CSS )
                </h1>
            </a>
        </section>
    </footer>
</body>

</html>