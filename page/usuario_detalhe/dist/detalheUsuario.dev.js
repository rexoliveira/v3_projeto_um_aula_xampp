"use strict";

function detalharUsuario(id) {
  var detalhes, resposta;
  return regeneratorRuntime.async(function detalharUsuario$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return regeneratorRuntime.awrap(fetch('../usuario_detalhe/usuario_detalhe.php?id=' + id));

        case 2:
          detalhes = _context.sent;
          _context.next = 5;
          return regeneratorRuntime.awrap(detalhes.json());

        case 5:
          resposta = _context.sent;
          document.getElementById("usaurio_detalhe").innerHTML = JSON.stringify(resposta.dados);

        case 7:
        case "end":
          return _context.stop();
      }
    }
  });
}