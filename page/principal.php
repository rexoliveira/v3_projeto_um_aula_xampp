<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard SmartCityCamaquã</title>
    <link rel="shortcut icon" href="../image/icon/smart-city.png" type="image/x-icon">
    <!-- link das fontes -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
        rel="stylesheet" />
    <!-- fonte de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="../style/style.css" />

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link href="../style/menu_lateral_style.css" rel="stylesheet" />
    <script src="../script/menu_lateral.js" async></script>
</head>

<body class="body">
    <section class="sidebar">
        <input id="menu_toggle" type="checkbox" />
        <label class="menu_btn" for="menu_toggle">
            <span class="span_toggle"></span>
        </label>
        <section class="logo_details">
            <img class="icon" src="../image/icon/smart-city-200.png" alt="imagem_lateral" />
            <h1 class="logo_name">SmartCity</h1>
        </section>

        <ul class="nav_list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Busca..." />
                <span class="tooltip menu">Busca</span>
            </li>

            <li>
                <a href="dashboard.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip menu">Dashboard</span>
            </li>

            <li>
                <a href="usuarios.php">
                    <i class="bx bx-user-plus"></i>
                    <span class="links_name">Usuários</span>
                </a>
                <span class="tooltip menu">Usuários</span>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Menssagens</span>
                </a>
                <span class="tooltip menu">Menssagens</span>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Análise</span>
                </a>
                <span class="tooltip menu">Análise</span>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="links_name">Ordem</span>
                </a>
                <span class="tooltip menu">Ordem</span>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-save"></i>
                    <span class="links_name">Salvos</span>
                </a>
                <span class="tooltip menu">Salvos</span>
            </li>

            <li class="bx_cog">
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Configurações</span>
                </a>
                <!-- <span class="tooltip menu">Configurações</span> -->

                <ul class="sub_menu">
                    <li><a class="link_name" href="#">Ferramentas</a></li>
                    <li><a href="#">Administração</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </li>

            <li class="profile">
                <section class="profile_details">
                    <img class="img_user" src="../image/icon/profile_user.jpg" alt="imagem do usuário" />
                    <section class="name_job">
                        <h1 class="name_user">Rodrigo Oliveira</h1>
                        <h2 class="job">Analista de Sistemas</h2>
                    </section>
                    <i class="bx bx-log-out" id="log_out"></i>
                    <span class="tooltip_logout">Sair da Sessão</span>
                </section>
            </li>
        </ul>
    </section>
    <section class="home_section">
        <section class="text">
            <section class="logo_title">
                <img class="logo principal" src="../image/icon/smart-city-200.png" alt="" />
                <h1 class="title_principal">SmartCityCamaquã</h1>

                <section class="logo_sub_title">
                    <ul class="menu">
                        <button class="button cul" type="button">
                            <a class="item_menu" href="cultura.php">Cultura</a>
                        </button>
                        <button class="button edu" type="button">
                            <a class="item_menu" href="educacao.php">Educação</a>
                        </button>
                        <button class="button seg" type="button">
                            <a class="item_menu" href="seguranca.php">Segurança</a>
                        </button>
                        <button class="button tra" type="button">
                            <a class="item_menu" href="transporte.php">Transporte</a>
                        </button>
                        <button class="button sob" type="button">
                            <a class="item_menu" href="sobre.php">Sobre</a>
                        </button>

                        <button class="button log" type="button">
                            <a class="item_menu" href="cadastro.php">Cadastra-se</a>
                        </button>

                        <button class="button log login" type="button">
                            <a class="item_menu" href="login.php"><span class="material-icons">person</span>Login</a>
                        </button>
                    </ul>

                </section>

            </section>

            <section id="all_cards">
                <section class="cards_ver">
                    <section class="card_hor vertical">
                        <a href="bot.php">
                            <h1 class="title_card_ver">BOT HELP</h1>
                            <img class="image_card" src="../image/icon/bot-animado.gif" alt="meteorologia" />
                        </a>
                    </section>

                    <section class="card_hor vertical">
                        <a href="#">
                            <h1 class="title_card_ver">Dados Cidade</h1>
                            <img class="image_card" src="https://media2.giphy.com/media/gjrOAylhpZm3dLnO5J/200w.gif"
                                alt="meteorologia" />
                        </a>
                    </section>

                    <section class="card_hor vertical">
                        <a href="#" target="_blank">
                            <h1 class="title_card_ver">Administração Pública</h1>
                            <img class="image_card"
                                src="https://i.pinimg.com/originals/1c/a5/8f/1ca58f7b883641678a11122a75be485a.gif"
                                alt="meteorologia" />
                        </a>
                    </section>

                    <section class="card_hor vertical">
                        <a href="#" target="_blank">
                            <h1 class="title_card_ver">Tempo</h1>
                            <img class="image_card" src="../image/icon/meteorologia.png" alt="meteorologia" />
                        </a>
                    </section>
                </section>

                <section class="cards_hor">
                    <section class="card_hor tempo">
                        <a href="https://weather.com/weather/today/l/-30.85,-51.81?par=google" target="_blank">
                            <h1 class="title_card_hor">Tempo</h1>
                            <img class="image_card tempo"
                                src="https://www.tempo.com/wimages/fotoa517470f63212cb3de23bafb676eb41a.png" />
                        </a>
                    </section>

                    <section class="card_hor cultura">
                        <a href="https://www.camaqua.rs.gov.br/portal/noticias/0/3/5489/secretaria-da-cultura-disponibilizara-links-de-atualizacao-de-cadastros-culturais"
                            target="_blank">
                            <h1 class="title_card_hor">Cultura</h1>
                            <img class="image_card cultura"
                                src="https://www.camaqua.rs.gov.br/fotos/0b9b5d60dfc3ea0150fa4537413d0b17.jpg"
                                alt="cultura" />
                        </a>
                    </section>

                    <section class="card_hor transito">
                        <a href="https://www.google.com/maps/@-30.8542051,-51.8078113,16.13z/data=!5m1!1e1"
                            target="_blank">
                            <h1 class="title_card_hor">Transito</h1>
                        </a>
                        <iframe class="image_card transito"
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13701.402916139605!2d-51.8070068!3d-30.8488541!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1656006668912!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section>

                    <section class="card_hor noticia">
                        <a href="https://www.cliccamaqua.com.br/noticias/" target="_blank">
                            <h1 class="title_card_hor">Noticias</h1>
                            <img class="image_card noticias" src="../image/icon/click_camaqua.png" alt="cultura" />
                        </a>
                    </section>

                    <section class="card_hor camara">
                        <a href="https://www.camaracq.rs.gov.br/" target="_blank">
                            <h1 class="title_card_hor">Câmara</h1>
                        </a>
                        <iframe class="image_card_camara"
                            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamaracamaqua%2Fvideos%2F616672069300248%2F&show_text=0&width=560"
                            width="225" height="165" style="border: none; overflow: hidden" scrolling="yes"
                            frameborder="0" allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </section>
                </section>
            </section>
        </section>
    </section>
</body>

</html>