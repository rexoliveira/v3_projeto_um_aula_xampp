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
          <button class="btn-fechar" onclick="fechar('none')">Fechar</button>
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

            <dt class="cte">Telefone: </dt>
            <dd class="cite"><span id="telUsuario"></span></dd>
            
            <dt class="cen">Endereço: </dt>
            <dd class="cnen"><span id="endUsuario"></span></dd>
            
            <dt class="cgh">GitHub: </dt>
            <dd class="cegh"><span id="githubUsuario"></span></dd>
          </dl>
        </main>
        <footer class="modal-footer">
           
        </footer>
      </section>
    
  </body>
</html>
