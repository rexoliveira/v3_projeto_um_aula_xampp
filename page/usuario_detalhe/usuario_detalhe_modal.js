
const abrir_modal = document.querySelector('.btn_detalhes')
const modal = document.getElementById('modal-detalhe-usuario')

abrir_modal.addEventListener("click", function () {fecharBtnModal('Block')})

function fecharModal() { fecharBtnModal('none') }

modal.addEventListener("click", function () { fecharBtnModal('none') })

function fecharBtnModal(display) {
    if (typeof modal == 'undefined' || modal === null) {
        return;
    }
    modal.style.display = display
}