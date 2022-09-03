<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="../../image/icon/smart-city.png"
      type="image/x-icon"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link rel="stylesheet" href="contato_modal.css" />
    <title>Contato</title>
  </head>

  <body id="contato_modal">
    <section class="container-contato">
      <section class="conteudo">
        <section class="aside-esquerdo-contato">
          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> location_on </span>
            <h2 class="topico">Endereço</h2>
            <h2 class="texto-um">Nome da rua, numero123</h2>
            <h2 class="texto-dois">Bairro Cidade</h2>
          </section>

          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> call </span>
            <h2 class="topico">Telefone</h2>
            <h2 class="texto-um">+00 00 12345 6789</h2>
            <h2 class="texto-dois">+00 00 12345 6789</h2>
          </section>

          <section class="endereco detalhes">
            <span class="material-symbols-outlined"> mail </span>
            <h2 class="topico">E-mail</h2>
            <h2 class="texto-um">email@dominio.com...</h2>
            <h2 class="texto-dois">email@dominio.com...</h2>
          </section>
        </section>

        <section class="aside-direito-contato">
          <h1 class="topico-texto">Envie sua mensagem</h1>

          <form action="envio_email.php" method="POST">
            
            <section id="nome">
              <!-- disabled - não envia os dados somente o "readonly" -->
              <input
                type="text"
                name="nome"
                id="inome"
                readonly
                value="Rodrigo Oliveira"
              />
              <label for="inome">
                <span class="material-symbols-outlined" id="nome_icon">
                  person
                </span>
                Nome
              </label>
            </section>

            <section id="email">
              <input
                type="email"
                name="email"
                id="iemail"
                placeholder="email@dominio.com..."
              />
              <label for="iemail">
                <span class="material-symbols-outlined" id="contact_mail">
                  contact_mail
                </span>
                Endereço de e-mail
              </label>
            </section>

            <section id="assunto">
              <input
                type="text"
                name="assunto"
                id="iassunto"
                placeholder="assunto..."
              />
              <label for="iassunto">
                <span class="material-symbols-outlined" id="subject">
                  subject
                </span>
                Assunto
              </label>
            </section>
            <section id="mensagem">
              <textarea
                name="mensagem"
                id="imensagem"
                cols="30"
                rows="10"
                placeholder="Escreva aqui sua mensagem..."
              ></textarea>
              <label for="imensagem">
                <span class="material-symbols-outlined" id="sticky_note_2">
                  sticky_note_2
                </span>
                Mensagem
              </label>
            </section>
            <section id="botao">
              <input type="submit" value="Enviar" name="enviar" />
            </section>
          </form>
        </section>
      </section>
    </section>
  </body>
</html>
