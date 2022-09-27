"use strict";

/* Preencher serviços na tabela */
dadostransportes.forEach(function (rotas) {
  /* Cria o elemeneto dentro da "table tbody" */
  var tr = document.createElement('tr');
  /* Escolhe o tipo de status basedo na cor do texto */

  var status = rotas.linha === '' ? 'analise' : rotas.horarioChegada === '' ? 'alerta' : rotas.horarioSaida === '' ? 'sucesso' : rotas.empresa === '' ? 'analise' : rotas.diaSemana === 'Sabado/Domingo' ? 'sucesso' : rotas.diaSemana === 'Feriados' ? 'perigo' : 'white';
  /* Atribui a construção da tabela à váriável */

  var trContent = "\n                <td class=\"".concat(status, "\">").concat(rotas.linha, "</td>\n                <td class=\"").concat(status, "\">").concat(rotas.horarioChegada, "</td>\n                <td class=\"").concat(status, "\">").concat(rotas.horarioSaida, "</td>\n                <td class=\"").concat(status, "\">").concat(rotas.empresa, "</td>\n                <td class=\"").concat(status, "\">").concat(rotas.diaSemana, "</td>\n                ");
  /* Cria as linha com o conteúdo da variável */

  tr.innerHTML = trContent;
  console.log(tr);
  /* Atribui ao corpo da tabela as linhas */

  document.querySelector('main table tbody').appendChild(tr);
});