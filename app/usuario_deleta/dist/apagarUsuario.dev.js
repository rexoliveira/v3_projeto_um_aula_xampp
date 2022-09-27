"use strict";

//Apagar o registro no banco de dados
function apagarUsuario(id) {
  var confirmar, dados, resposta, status, msg;
  return regeneratorRuntime.async(function apagarUsuario$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          confirmar = confirm("Tem certeza que deseja excluir o usuário?");

          if (!confirmar) {
            _context.next = 13;
            break;
          }

          _context.next = 4;
          return regeneratorRuntime.awrap(fetch('../usuario_apaga/apagarUsuario.php?id=' + id));

        case 4:
          dados = _context.sent;
          _context.next = 7;
          return regeneratorRuntime.awrap(dados.json());

        case 7:
          resposta = _context.sent;
          status = resposta['status'];
          msg = resposta['msg'];

          if (status) {
            document.location.reload(true);
            document.getElementById("avisoDelete").innerHTML = "<span>" + msg + "</span>"; // Recarrega a página atual sem usar o cache

            setInterval(function () {
              document.location.reload(true);
            }, 10000);
          } else {
            document.location.reload(true);
            document.getElementById("avisoDelete").innerHTML = "<span style='color:yellow'>" + msg + "</span>";
            setInterval(function () {
              document.location.reload(true);
            }, 10000);
          }

          _context.next = 15;
          break;

        case 13:
          document.getElementById("avisoDelete").innerHTML = "<span style='color:green'>Exclusão cancelada!</span>";
          setInterval(function () {
            document.location.reload(true);
          }, 2000);

        case 15:
        case "end":
          return _context.stop();
      }
    }
  });
}