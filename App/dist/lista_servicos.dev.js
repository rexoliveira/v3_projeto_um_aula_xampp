"use strict";

servicos.forEach(function (service) {
  var tr = document.createElement('tr');
  /* Tem que ser dentro de crase */

  /* Escolhe o tipo de status basedo na cor do texto */

  var status = service.situacao === 'Pendente' ? 'perigo' : service.situacao === 'Andamento' ? 'alerta' : service.situacao === 'Efetuado' ? 'sucesso' : service.situacao === 'Analise' ? 'analise' : 'principal';
  /* Atribui a construção da tabela à váriável */

  var trContent = "\n                <td>".concat(service.servico, "</td>\n                <td>").concat(service.numero, "</td>\n                <td>").concat(service.taxa, "</td>\n                <td class=\"").concat(status, "\">").concat(service.situacao, "</td>\n                <td class=\"principal\"><a href=\"#\" style=\"text-decoration:none\">Detalhes</a></td>\n                ");
  /* Cria as linha com o conteúdo da variável */

  tr.innerHTML = trContent;
  /* Atribui ao corpo da tabela as linhas */

  document.querySelector('table tbody').appendChild(tr);
});