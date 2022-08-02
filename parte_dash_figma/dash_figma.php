<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="../image/icon/smart-city.png"
      type="image/x-icon"
    />

    <!-- ####################################################################################################### -->
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
      href="https://fonts.googleapis.com/css?family=Roboto:400,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="./menu_topo.css" />
    <script src="./menu_topo.js" defer></script>
    <!-- ####################################################################################################### -->

    <!-- MATERIAL CDN - ICONS DO GOOGLE -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link rel="stylesheet" href="style.css" />

    <script src="script.js" defer></script>
    <script src="servicos.js"></script>
    <script src="../script/data_hora.js"></script>

    <title>Principal-Dashboard</title>
  </head>

  <body>
    <section class="container">
      <!-- MENU-BOTÕES-TOPO -->
      <header>
        <!-- <h1>BOTÃO <button onclick="genioFullScreen()" id="btn">teste</button></h1> -->

        <ul class="exo-menu">
          <li>
            <a class="active" href="#" onclick="genioFullScreen()" id="btn"
              ><i class="fa fa-arrows-alt"></i> Tela-grande</a
            >
          </li>
          <li class="drop-down">
            <a href="#"><i class="fa fa-cogs"></i> Menu</a>
            <!--Drop Down-->
            <ul class="drop-down-ul animated fadeIn">
              <li class="flyout-right">
                <a href="#">Submenu direito</a
                ><!--Flyout Right-->
                <ul class="animated fadeIn">
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Computer</a></li>
                  <li><a href="#">Watch</a></li>
                </ul>
              </li>

              <li class="flyout-left">
                <a href="#">Submenu esquerdo</a
                ><!--Flyout Left-->
                <ul class="animated fadeIn">
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Computer</a></li>
                  <li><a href="#">Watch</a></li>
                </ul>
              </li>

              <li><a href="#">Não Submenu</a></li>
            </ul>
            <!--//End drop down-->
          </li>
          <li>
            <a href="#"><i class="fa fa-cogs"></i> Serviços</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-briefcase"></i> Arquivos</a>
          </li>
          <li class="mega-drop-down">
            <a href="#"><i class="fa fa-list"></i> Outros</a>
            <div class="animated fadeIn mega-menu">
              <div class="mega-menu-wrap">
                <div class="row">
                  <div class="col-md-4">
                    <h4 class="row mega-title">Feature</h4>
                    <img
                      class="img-responsive"
                      src="https://3.bp.blogspot.com/-rUk36pd-LbM/VcLb48X4f-I/AAAAAAAAGCI/Y_UxBAgEqwA/s1600/Magento_themes.jpg"
                    />
                  </div>
                  <div class="col-md-2">
                    <h4 class="row mega-title">Standers</h4>
                    <ul class="stander">
                      <li><a href="#">Mobile</a></li>
                      <li><a href="#">Computer</a></li>
                      <li><a href="#">Watch</a></li>
                      <li><a href="#">laptop</a></li>
                      <li><a href="#">Camera</a></li>
                      <li><a href="#">I pad</a></li>
                      <li>
                        <a class="view-more btn- btn-sm" href="#">View more</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h4 class="row mega-title">Description</h4>
                    <ul class="description">
                      <li>
                        <a href="#">Women</a>
                        <span>Description of Women</span>
                      </li>
                      <li>
                        <a href="#">Men</a>
                        <span>Description of men Cloths</span>
                      </li>
                      <li>
                        <a href="#">Kids</a>
                        <span>Description of Kids Cloths</span>
                      </li>
                      <li>
                        <a href="#">Others</a>
                        <span>Description of Others Cloths</span>
                      </li>
                      <li>
                        <a class="view-more btn btn-sm" href="#">View more</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h4 class="row mega-title">Icon + Description</h4>
                    <ul class="icon-des">
                      <li>
                        <a href="#"><i class="fa fa-globe"></i>Web</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-mobile"></i>Mobile</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-arrows-h"></i>Responsive</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-desktop"></i>Desktop</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-paint-brush"></i>UI/UX</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="blog-drop-down">
            <a href="#"><i class="fa fa-bullhorn"></i> Blog</a>
            <div class="Blog animated fadeIn">
              <div class="col-md-4">
                <img
                  class="img-responsive"
                  src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">Texto_01</h4>
                  <p class="blog-texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis
                    nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                    iriure dolor in hendrerit in vulputate.
                  </p>
                  <a class="texto_base_blog" href="#"
                    >Consulte mais informação</a
                  >
                </div>
              </div>
              <div class="col-md-4">
                <img
                  class="img-responsive"
                  src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">Texto_02</h4>
                  <p class="blog-texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis
                    nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                    iriure dolor in hendrerit in vulputate.
                  </p>
                  <a class="texto_base_blog" href="#"
                    >Consulte mais informação</a
                  >
                </div>
              </div>
              <div class="col-md-4">
                <img
                  class="img-responsive"
                  src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">Texto_03</h4>
                  <p class="blog-texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis
                    nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                    iriure dolor in hendrerit in vulputate.
                  </p>
                  <a class="texto_base_blog" href="#"
                    >Consulte mais informação</a
                  >
                </div>
              </div>
            </div>
          </li>
          <li class="images-drop-down">
            <a href="#"><i class="fa fa-photo"></i> Cultura</a>
            <div class="Images animated fadeIn">
              <div class="col-md-3">
                <h4>Imagens Título</h4>
                <img
                  class="img-responsive"
                  src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg"
                />
              </div>
              <div class="col-md-3">
                <h4>Imagens Título</h4>
                <img
                  class="img-responsive"
                  src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg"
                />
              </div>
              <div class="col-md-3">
                <h4>Imagens Título</h4>
                <img
                  class="img-responsive"
                  src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg"
                />
              </div>
              <div class="col-md-3">
                <h4>Imagens Título</h4>
                <img
                  class="img-responsive"
                  src="https://3.bp.blogspot.com/-hGrnZIjzL2k/VcLb47kyQKI/AAAAAAAAGCQ/J6Q2IAHIQvQ/s1600/image4.jpg"
                />
              </div>
            </div>
          </li>
          <li>
            <a href="#"><i class="fa fa-envelope"></i> Contato</a>
            <div class="contact"></div>
          </li>
          <a href="#" class="toggle-menu visible-xs-block">|||</a>
        </ul>
      </header>

      <aside class="aside_esquerdo">
        <!-- SESSAO DO USUARIO -->
        <section class="sessao_usuario_topo">
          <!-- LOGO-TITULO -->
          <section class="logo">
            <img src="../image/icon/smart-city-200.png" alt="imagem_logo" />
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
            <span class="mensagem-contador">69</span>
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

          <div class="tema-toggler" id="tema-toggler">
            <span class="material-symbols-outlined"> light_mode </span>
            <span class="material-symbols-outlined active"> dark_mode </span>
          </div>
        </section>
      </aside>

      <!-- ----------------------FIM DO ASIDE---------------------- -->

      <main>
        <!-- NOME DO DASBOARD -->
        <h1 class="genio">GÊNIO<span class="digital">DIGITAL</span></h1>

        <!-- DATA-HORA -->
        <section class="date">
          <sapn id="data-hora"></sapn>
        </section>

        <section class="situacao_cidade">
          <div class="card1">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>81%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- ======================================================= -->
          <div class="card2">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>62%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- ======================================================= -->
          <div class="card3">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>44%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- ======================================================= -->
          <div class="card4">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>81%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- ======================================================= -->
          <div class="card5">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>62%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- ======================================================= -->
          <div class="card6">
            <span class="material-symbols-outlined"> subject </span>
            <section class="meio">
              <div class="esquerdo">
                <h3>Texto a ser inserido</h3>
                <h1>00000</h1>
              </div>
              <div class="progresso">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="numero">
                  <p>44%</p>
                </div>
              </div>
            </section>
            <small class="texto_base_card">Texto 00</small>
          </div>
          <!-- --------------FIM DO CARDS SITUACAO-CIDADE------------ -->

          <!-- ==========================SERVICOS======================== -->
        </section>
        <section class="recentes_servicos">
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
                <td class="principal">Detalhes</td>
              </tr> -->
            </tbody>
          </table>
          <a href="#">Exibir Todos</a>
        </section>
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
          <!-- ######################PERFIL##########################▲ -->
        </section>
        <!-- FIM TOPO -->
        <section class="recentes_noticias">
          <!-- TITULO-NOTICIAS -->
          <h2>Notícias</h2>
          <section class="noticias">
            <!-- ========================================================= -->
            <div class="noticia">
              <div class="perfil-foto">
                <img src="../image/noticias-1.png" alt="imagem-noticia" />
              </div>
              <div class="mensagem">
                <p>Notícias da<strong> Semana</strong> da cidade e região.</p>
                <small class="texto_base_card">2 min Jul</small>
              </div>
            </div>
            <!-- ========================================================= -->
            <div class="noticia">
              <div class="perfil-foto">
                <img src="../image/noticias-2.png" alt="imagem-noticia" />
              </div>
              <div class="mensagem">
                <p>
                  Notícias da<strong> mais vistas</strong> na região e no mundo.
                </p>
                <small class="texto_base_card">1 h Jul</small>
              </div>
            </div>
            <!-- ========================================================= -->
            <div class="noticia">
              <div class="perfil-foto">
                <img src="../image/noticias-3.png" alt="imagem-noticia" />
              </div>
              <div class="mensagem">
                <p>Notícias sobre<strong> Trânsito</strong> da cidade.</p>
                <small class="texto_base_card">4 h Jul</small>
              </div>
            </div>
            <!-- ========================================================= -->
            <div class="noticia">
              <div class="perfil-foto">
                <img src="../image/noticias-4.png" alt="imagem-noticia" />
              </div>
              <div class="mensagem">
                <p>Notícias de<strong> Esporte</strong> favorito.</p>
                <small class="texto_base_card">3 dias Jul</small>
              </div>
            </div>
            <!-- ========================================================= -->
          </section>
        </section>
        <!-- --------------------------FIM NOTICIAS--------------------------- -->
        <!-- ==========================CIADADE_ANALISE======================== -->
        <section class="cidade_analise">
          <!-- TITULO-CIDADE_ANALISE -->
          <h2>Analise da City</h2>
          <!-- ========================================================= -->
          <section class="item transito">
            <div class="icone">
              <span class="material-symbols-outlined"> directions_bus </span>
            </div>
            <section class="direito">
              <div class="info">
                <h3>Trânsito</h3>
                <small class="texto_base_card">Últimas 24 horas</small>
              </div>
              <h5 class="alerta">+60%</h5>
              <h3>0000</h3>
            </section>
          </section>
          <!-- ========================================================= -->
          <section class="item estacionamento">
            <div class="icone">
              <span class="material-symbols-outlined"> local_parking </span>
            </div>
            <section class="direito">
              <div class="info">
                <h3>Estacionamento livre</h3>
                <small class="texto_base_card">Últimas 2 horas</small>
              </div>
              <h5 class="perigo">+10%</h5>
              <h3>0000</h3>
            </section>
          </section>
          <!-- ========================================================= -->
          <section class="item clima">
            <div class="icone">
              <span class="material-symbols-outlined"> rainy </span>
            </div>
            <section class="direito">
              <div class="info">
                <h3>Probalidade de chuva</h3>
                <small class="texto_base_card">Últimas 5 horas</small>
              </div>
              <h5 class="sucesso">+20%</h5>
              <h3>0000</h3>
            </section>
          </section>
          <!-- ========================================================= -->
          <section class="item adiciona_analise">
            <div class="info">
              <span class="material-symbols-outlined">add</span>
              <h3>Adiciona Analise</h3>
            </div>
          </section>
          <!-- ========================================================= -->
        </section>
      </aside>
    </section>
  </body>
</html>