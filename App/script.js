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


    /* Crédito:https://www.horadecodar.com.br/2020/08/22/como-ativar-a-tela-cheia-do-navegador-com-javascript/ */
    /* GERA TELA EM FULLSCREEN */
  function genioFullScreen() {
    if (!document.fullscreenElement &&    // método padrão alternativo
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // métodos de trabalho atuais
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    }
  }


  