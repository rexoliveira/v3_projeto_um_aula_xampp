const abreModalBotao = document.querySelector('#abrir-modal')
const fechaModalBotao = document.querySelector('#fechar-modal')
const modalIframe = document.querySelector('#modal-iframe')
const fade = document.querySelector('#fade')
const acao = [abreModalBotao, fechaModalBotao, fade]
const acao2 = [fechaModalBotao, fade]

const toggleModal = () => {
    /* Toggle- se a classe está ela é removida se não é adicionada */
    modalIframe.classList.toggle("hide")
    fade.classList.toggle("hide")
}

acao.forEach((el) => {
    el.addEventListener("click", () => toggleModal());
})

//Recarregar a página
acao2.forEach((el) => {
    el.addEventListener("click", () =>  history.go(0));
})