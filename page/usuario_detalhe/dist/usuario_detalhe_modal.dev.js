"use strict";

var abrir_modal = document.querySelector('.btn_detalhes');
var modal = document.getElementById('modal-detalhe-usuario');
var cartoes = document.querySelector('.cartoes');
var btn_detalhes = document.querySelector('#iloupe');
var btn_detalhes_abrir = document.querySelector('#btn_detalhes_abrir');
abrir_modal.addEventListener("click", function () {
  fecharBtnModal('Block');
});

function fecharModal() {
  fecharBtnModal('none');
}

modal.addEventListener("click", function () {
  fecharBtnModal('none');
});

function fecharBtnModal(display) {
  if (typeof modal == 'undefined' || modal === null) {
    return;
  }

  if (display === 'Block') {
    cartoes.style.height = '60vh';
    modal.style.height = '22vh';
    btn_detalhes_abrir.style.display = 'none';
    btn_detalhes.style.color = 'var(--color-alerta)';
  } else {
    cartoes.style.margin = '1rem 0 0 0';
    cartoes.style.height = '80vh';
    btn_detalhes_abrir.style.display = 'Block';
    btn_detalhes.style.color = 'var(--color-escuro)';
  }

  modal.style.display = display;
}