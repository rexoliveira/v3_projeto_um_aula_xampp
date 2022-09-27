"use strict";

var abrir_modal = document.querySelector('.abrir-modal-detalhe-usuario');
var modal = document.getElementById('modal-detalhe-usuario');
abrir_modal.addEventListener("click", function () {
  if (typeof modal == 'undefined' || modal === null) {
    return;
  }

  modal.style.display = 'Block';
}, false);

function fecharModal(nome_modal) {
  if (typeof modal == 'undefined' || modal === null) {
    return;
  }

  modal.style.display = 'none';
}