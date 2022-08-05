"use strict";

var abreModalBotao = document.querySelector('#abrir-modal');
var fechaModalBotao = document.querySelector('#fechar-modal');
var modalIframe = document.querySelector('#modal-iframe');
var fade = document.querySelector('#fade');
var acao = [abreModalBotao, fechaModalBotao, fade];
var acao2 = [fechaModalBotao, fade];

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

acao2.forEach(function (el) {
  el.addEventListener("click", function () {
    return history.go(0);
  });
});