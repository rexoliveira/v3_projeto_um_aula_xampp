/* Crédito:  https://pt.stackoverflow.com/questions/456892/validar-confirma%C3%A7%C3%A3o-de-senha*/
let senha = document.getElementById('isenha');
let conf_senha = document.getElementById('iconfirma_senha');

function validarSenha() {
  if (senha.value != conf_senha.value) {
    conf_senha.setCustomValidity("Senhas diferentes!");
    conf_senha.reportValidity();
    return false;
  } else {
    conf_senha.setCustomValidity("");
    return true;
  }
}

// verificar também quando o campo for modificado, para que a mensagem suma quando as senhas forem iguais
conf_senha.addEventListener('input', validarSenha);