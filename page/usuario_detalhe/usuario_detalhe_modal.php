<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modal</title>
  </head>
  <body>
   
      <section class="modal-conteudo">
        <header class="modal-header">
            <h1>Detalhes do Usuário</h1>
        </header>
        <main class="modal-main">
          <dl class="linha">
            <dt class="cid">ID: </dt>
            <dd class="cidu"><span id="idUsuario"></span></dd>
            
            <dt class="cno">Nome: </dt>
            <dd class="cnou"><span id="nomeUsuario"></span></dd>
            
            <dt class="cem">E-mail: </dt>
            <dd class="cemu"><span id="emailUsuario"></span></dd>
          </dl>
        </main>
        <footer class="modal-footer">
            <button class="btn-fechar" onclick="fecharModal()">Fechar</button>
        </footer>
      </section>
    
  </body>
</html>
