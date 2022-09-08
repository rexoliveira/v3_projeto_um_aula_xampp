
const abrir_modal = document.querySelector('.btn_detalhes')
const modal = document.getElementById('modal-detalhe-usuario')
const cartoes = document.querySelector('.cartoes')

abrir_modal.addEventListener("click", function () {fecharBtnModal('Block')})

function fecharModal() { fecharBtnModal('none') }

modal.addEventListener("click", function () { fecharBtnModal('none') })

function fecharBtnModal(display) {
    if (typeof modal == 'undefined' || modal === null) {
        return;
    }
    if(display ==='Block'){
        cartoes.style.height = '60vh'
    }else{
        cartoes.style.margin= '1rem 0 0 0'
        cartoes.style.height = '80vh'
    }
    modal.style.display = display
}

