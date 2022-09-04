"use strict";

var abreModalBotao = document.querySelector('#abrir-modal');
var fechaModalBotao = document.querySelector('#fechar-modal');
var modalIframe = document.querySelector('#modal-iframe');
var fade = document.querySelector('#fade');
var acao = [abreModalBotao, fechaModalBotao, fade]; //const acao2 = [fechaModalBotao, fade]

var toggleModal = function toggleModal() {
  /* Toggle- se a classe está ela é removida se não é adicionada */
  modalIframe.classList.toggle("hide");
  fade.classList.toggle("hide");
};

acao.forEach(function (el) {
  el.addEventListener("click", function () {
    return toggleModal();
  });
}); //Recarregar a página
//Desabilitada, mudou a função do MODAL

/* acao2.forEach((el) => {
    el.addEventListener("click", () =>  history.go(0));
}) */