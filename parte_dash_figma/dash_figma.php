<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MATERIAL CDN - ICONS DO GOOGLE -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />






    <link rel="stylesheet" href="style.css" />

    <script src="script.js" defer></script>
    <script src="service.js"></script>
    <script src="../script/data_hora.js"></script>


    <title>Principal-Dashboard</title>
</head>

<body>
    <!-- MENU-BOTÕES-TOPO -->
    <header>
        <h1>BOTÃO <button onclick="genioFullScreen()" id="btn">teste</button></h1>
    </header>

    <section class="container">
        <aside>
            <!-- SESSAO DO USUARIO -->
            <section class="sessao_usuario_topo">
                <!-- LOGO-TITULO -->
                <section class="logo">
                    <img src="../image/icon/smart-city-200.png" alt="imagem_logo" />
                    <h2>Smart<span class="danger">Camaquã</span></h2>
                </section>
                <!-- SAIRDA SESSAO -->
                <section class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </section>
            </section>

            <!-- BARRA-LATERAL-ESQUERDA -->
            <section class="sidebar" id="sidebar">
                <!-- Removido função class="active" -->
                <a href="#">
                    <span class="material-symbols-outlined"> person_add </span>
                    <h3>Cadastra Usuário</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> add_photo_alternate </span>
                    <h3>Adiciona Imagem</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> apartment </span>
                    <h3>Situação da Cidade</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> cleaning_services </span>
                    <h3>Serviços</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> feed </span>
                    <h3>Notícias</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> event_available </span>
                    <h3>Agenda</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> mark_email_unread </span>
                    <h3>Notificação</h3>
                    <span class="message-count">69</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> settings </span>
                    <h3>Configuração</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> snippet_folder </span>
                    <h3>Projetos</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined"> help </span>
                    <h3>Suporte</h3>
                </a>

                <div class="theme-toggler" id="theme-toggler">
                    <span class="material-symbols-outlined"> light_mode </span>
                    <span class="material-symbols-outlined active"> dark_mode </span>
                </div>
            </section>
        </aside>

        <!-- ----------------------FIM DO ASIDE---------------------- -->

        <main>
            <h1 class="genio">GÊNIO<span class="digital">DIGITAL</span></h1>

            <div class="date">
                <sapn id="data-hora"></sapn>
            </div>

            <section class="insights">
                <div class="card1">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <div class="card2">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <div class="card3">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <div class="card4">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <div class="card5">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <div class="card6">
                    <span class="material-symbols-outlined"> subject </span>
                    <section class="middle">
                        <div class="left">
                            <h3>Texto a ser inserido</h3>
                            <h1>00000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </section>
                    <small class="text-muted">Texto 00</small>
                </div>
                <!-- ----------------------FIM DO CARDS TOPO-ESQUERDO---------------------- -->
            </section>
            <section class="recent-orders">
                <h2>Serviços</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Serviço</th>
                            <th>Número</th>
                            <th>Taxa (R$)</th>
                            <th>Situação</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Gerado por JS no arquivo service.js e excutado em script.js -->
                        <!-- <tr>
                <td>IPTU</td>
                <td>23564</td>
                <td>137,15</td>
                <td class="warning">Pendente</td>
                <td class="primary">Detalhes</td>
              </tr> -->
                    </tbody>
                </table>
                <a href="#">Exibir Todos</a>
            </section>
        </main>
        <!-- ----------------------FIM MAIN---------------------- -->

        <section class="right">
            <section class="sessao_usuario_topo">
                <section class="profile">
                    <button id="menu-button">
                        <span class="material-symbols-outlined"> menu </span>
                    </button>
                    <div class="info">
                        <p>Oi, <strong>Rodrigo Oliveira</strong></p>
                        <small class="text-muted">Administrador</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../image/avatar/rodrigo-oliveira.jpg" alt="avatar" />
                    </div>
                    <!-- href="../page/principal.php" DE TESTE AJUSTAR -->
                    <a href="../page/principal.php">
                        <span id="logout" class="material-symbols-outlined">
                            logout
                        </span>
                        <!-- <h3>Logout</h3> -->
                    </a>
                </section>
            </section>
            <!-- FIM TOPO -->
            <section class="recent-updates">
                <h2>Notícias</h2>
                <section class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../image/noticias-1.png" alt="imagem-noticia" />
                        </div>
                        <div class="message">
                            <p>Notícias da<strong> Semana</strong> da cidade e região.</p>
                            <small class="text-muted">2 min Jul</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../image/noticias-2.png" alt="imagem-noticia" />
                        </div>
                        <div class="message">
                            <p>
                                Notícias da<strong> mais vistas</strong> na região e no mundo.
                            </p>
                            <small class="text-muted">1 h Jul</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../image/noticias-3.png" alt="imagem-noticia" />
                        </div>
                        <div class="message">
                            <p>Notícias sobre<strong> Trânsito</strong> da cidade.</p>
                            <small class="text-muted">4 h Jul</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../image/noticias-4.png" alt="imagem-noticia" />
                        </div>
                        <div class="message">
                            <p>Notícias de<strong> Esporte</strong> favorito.</p>
                            <small class="text-muted">3 dias Jul</small>
                        </div>
                    </div>
                </section>
            </section>
            <!-- FIM NOTICIAS -->
            <section class="city-analytics">
                <h2>Analise da City</h2>

                <section class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined"> directions_bus </span>
                    </div>
                    <section class="right">
                        <div class="info">
                            <h3>Trânsito</h3>
                            <small class="text-muted">Últimas 24 horas</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>0000</h3>
                    </section>
                </section>

                <section class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined"> local_parking </span>
                    </div>
                    <section class="right">
                        <div class="info">
                            <h3>Estacionamento livre</h3>
                            <small class="text-muted">Últimas 2 horas</small>
                        </div>
                        <h5 class="danger">+10%</h5>
                        <h3>0000</h3>
                    </section>
                </section>

                <section class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined"> rainy </span>
                    </div>
                    <section class="right">
                        <div class="info">
                            <h3>Probalidade de chuva</h3>
                            <small class="text-muted">Últimas 5 horas</small>
                        </div>
                        <h5 class="success">+20%</h5>
                        <h3>0000</h3>
                    </section>
                </section>
                <section class="item add-analytics">
                    <div class="info">
                        <span class="material-symbols-outlined">add</span>
                        <h3>Adiciona Analise</h3>
                    </div>
                </section>
            </section>
        </section>
    </section>
</body>

</html>