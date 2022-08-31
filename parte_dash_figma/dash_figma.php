<?php
session_start();
?>


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

    <!-- MODAL -->
    <script src="./contato_modal/modal.js" defer></script>
    <link rel="stylesheet" href="./contato_modal/modal.css" />

    <title>Principal-Dashboard</title>
    <!-- CHATBOT -->
    <script
      src="//code.tidio.co/1aqgswzm5wfvfba4mfj0anecdshqfdcq.js"
      async
    ></script>
    
  </head>

  <body>
    <section id="todo-modal">
      <!-- <button id="abrir-modal" >Abrir</button> -->

      <!-- A transparência que divide o modal do conteudo de baixo -->
      <section class="hide" id="fade"></section>

      <section class="hide" id="modal-iframe">
        <section class="modal-cabecalho">
          <!-- <h2>Este é modal</h2> -->
          <button id="fechar-modal">Fechar</button>
        </section>
        <section class="modal-corpo">
          <iframe
            src="./contato_modal/contato_modal.php"
            frameborder="0"
          ></iframe>
        </section>
      </section>
    </section>
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
                <a href="#">Submenu direito</a>
                <!--Flyout Right-->
                <ul class="animated fadeIn">
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Computer</a></li>
                  <li><a href="#">Watch</a></li>
                </ul>
              </li>

              <li class="flyout-left">
                <a href="#">Submenu esquerdo</a>
                <!--Flyout Left-->
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
            <a href="usuarios_port/usuarios-port.php"
              ><i class="fa fa-users"></i> Usuários</a
            >
          </li>
          <li>
            <a
              href="transporte_port/transporte-port.php"
              ><i class="fa fa-bus"></i> Transporte</a
            >
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
                  src="../image/blog/cidades-inteligentes-smart-city.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">
                    Cidades Inteligentes: o que são e suas vantagens<br />Fonte:<a
                      class="https://blog-online.pucrs.br/public/cidades-inteligentes-conceito-e-vantagens/"
                      target="_blank"
                      href="#"
                    >
                      PUCRS online</a
                    >
                  </h4>
                  <p class="blog-texto">
                    As cidades inteligentes ou smart cities, são centros que
                    conseguem alinhar os avanços tecnológicos com o progresso
                    social e ambiental, através das tecnologias digitais e
                    disruptivas. O objetivo dessas urbanizações é proporcionar
                    aos cidadãos uma melhor qualidade de vida. Assim, as cidades
                    consideradas inteligentes são as que fazem uso estratégico
                    de infraestrutura, serviços, informação e comunicação com o
                    planejamento e gestão urbana necessários, dando resposta às
                    necessidades sociais e econômicas da sociedade. Nesse
                    sentido, o cidadão e os serviços essenciais estão
                    conectados, utilizam energia limpa, reaproveitam a água,
                    tratam o lixo, compartilham produtos, serviços e espaços,
                    além de se deslocar com facilidade e usufruir de serviços
                    públicos de qualidade.
                  </p>
                  <a
                    class="texto_base_blog"
                    href="https://blog-online.pucrs.br/public/cidades-inteligentes-conceito-e-vantagens/"
                    target="_blank"
                    >Consulte mais informação</a
                  >
                </div>
              </div>
              <div class="col-md-4">
                <img
                  class="img-responsive"
                  src="../image/blog/cidades-mais-modernas-do-mundo.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">
                    17 cidades mais modernas do mundo no quesito tecnologia
                  </h4>
                  <p class="blog-texto">
                    Se você busca por um destino urbanizado, cuja a tecnologia e
                    a modernidade são as características mais notáveis, anote as
                    indicações da lista abaixo das cidades que se mostram cada
                    vez mais avançadas no quesito high-tec, e capazes de fazer
                    da sua viagem uma experiência única:
                  </p>
                  <a
                    class="texto_base_blog"
                    href="https://www.viajali.com.br/cidades-mais-modernas-do-mundo/"
                    target="_blank"
                    >Consulte mais informação</a
                  >
                </div>
              </div>
              <div class="col-md-4">
                <img
                  class="img-responsive"
                  src="../image/blog/gestão-de-cidades-inteligentes.jpg"
                />
                <div class="blog-des">
                  <h4 class="blog-titulo">
                    Descubra como realizar a gestão de cidades inteligentes -
                    Blog da Exati
                  </h4>
                  <p class="blog-texto">
                    A gestão de cidades inteligentes deve ser realizada de forma
                    sustentável e criativa. Além disso, quem faz a gestão dessas
                    cidades também usa a tecnologia para viabilizar o
                    funcionamento dos serviços públicos de forma otimizada.
                    Dessa forma, o sistema da Exati vem para solucionar e
                    aprimorar a gestão de diversos serviços, como iluminação
                    pública, lixo urbano, manutenção viária e arborização.
                    Assim, o grande objetivo da plataforma Exati é oferecer
                    soluções capazes de melhorar a qualidade de vida da
                    população, trazendo inovações focadas em conectividade,
                    agilidade, sustentabilidade e economia.
                  </p>
                  <a
                    class="texto_base_blog"
                    href="https://blog.exati.com.br/gestao-de-cidades-inteligentes/"
                    target="_blank"
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
                <h4>Secretaria da Cultura</h4>
                <!-- Original: src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg" -->
                <img
                  class="img-responsive"
                  src="../image/cultura/secretaria-cultura .jpg"
                />
              </div>
              <div class="col-md-3">
                <h4>Feira do Livro</h4>
                <!--src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg"  -->
                <img
                  class="img-responsive"
                  src="../image/cultura/feira-livro.jpg"
                />
              </div>
              <!-- src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg"   -->
              <div class="col-md-3">
                <h4>53ª Expocamaqua e 3ª Mostra da Agricultura Familiar</h4>
                <img
                  class="img-responsive"
                  src="../image/cultura/53-expocamaqua-e-3-mostra-da-agricultura-familiar.jpg"
                />
              </div>
              <div class="col-md-3">
                <h4>Desfile da Patria 2019</h4>
                <!-- src="https://3.bp.blogspot.com/-hGrnZIjzL2k/VcLb47kyQKI/AAAAAAAAGCQ/J6Q2IAHIQvQ/s1600/image4.jpg"  -->
                <img
                  class="img-responsive"
                  src="../image/cultura/desfile-da-patria-2019.jpg"
                />
              </div>
            </div>
          </li>
          <li>
            <a href="#" id="abrir-modal"
              ><i class="fa fa-envelope"></i> Contato</a
            >
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
          <a href="./cadastro_port/cadastro.php">
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
            <h3>Serviços Públicos</h3>
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
        <h1>
          <span class="genio"
            >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span
          ><span class="digital"
            >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDIGITAL</span
          >
        </h1>

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
