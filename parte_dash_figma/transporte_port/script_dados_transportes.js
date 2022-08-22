/* Crédito:https://www.youtube.com/watch?v=BOF79TAIkYQ&t=2488s&ab_channel=EGATOR */


const sideMenu = document.querySelector('aside')
const menuBtn = document.querySelector('#menu-button')
const closeBtn = document.querySelector('#close-btn')

const themeToggler = document.querySelector("#tema-toggler")

/* Abre sidebar */
menuBtn.addEventListener('click', () => {
  sideMenu.style.display = 'block'

  /* EU AJUSTE */
  themeToggler.style.marginLeft = "2rem"
})

/* Fecha sidebar */
closeBtn.addEventListener('click', () => {
  sideMenu.style.display = 'none'
})

/* Troca de tema */
themeToggler.addEventListener('click', () => {
  document.body.classList.toggle('claro-tema-variaveis')

  /* Troca a sinalização de icone ativo */
  themeToggler.querySelector('span:nth-child(1)').classList.toggle('active')

  themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')
})


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
            rotas.diaSemana === 'Feriados' ? 'perigo' :
              'principal'

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




