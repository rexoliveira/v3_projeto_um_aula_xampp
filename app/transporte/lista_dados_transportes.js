
/* Preencher serviços na tabela */

dadostransportes.forEach(rotas => {
  /* Cria o elemeneto dentro da "table tbody" */
  const tr = document.createElement('tr')

  /* Escolhe o tipo de status basedo na cor do texto */
  const status =
    rotas.linha === '' ? 'analise' :
      rotas.horarioChegada === '' ? 'alerta' :
        rotas.horarioSaida === '' ? 'sucesso' :
          rotas.empresa === '' ? 'analise' :
            rotas.diaSemana === 'Sabado/Domingo' ? 'sucesso' :
              rotas.diaSemana === 'Feriados' ? 'perigo' :
                'white'

  /* Atribui a construção da tabela à váriável */
  const trContent =
    `
                <td class="${status}">${rotas.linha}</td>
                <td class="${status}">${rotas.horarioChegada}</td>
                <td class="${status}">${rotas.horarioSaida}</td>
                <td class="${status}">${rotas.empresa}</td>
                <td class="${status}">${rotas.diaSemana}</td>
                `
  /* Cria as linha com o conteúdo da variável */
  tr.innerHTML = trContent
  console.log(tr)
  /* Atribui ao corpo da tabela as linhas */
  document.querySelector('main table tbody').appendChild(tr)
})






