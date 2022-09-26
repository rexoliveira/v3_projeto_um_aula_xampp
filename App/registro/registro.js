//Crédito:https://www.devmedia.com.br/forum/verificar-se-o-email-preenchido-ja-existe-no-banco-de-dados-em-tempo-real/563411

//JQuery e JavaScript
const validateEmailExiste = () => {
  const $result = $('#iresposta');
  const emailEntrada = document.getElementById('iemail');

  //ID editar usuário
  const id = document.getElementById('id')
  //JQuery
  $.ajax({
    url: '../../page/registro/verifica_email.php',
    type: 'POST',
    data: { "email": emailEntrada.value },
    success: function (data) {
      //console.log(data); 
      data = $.parseJSON(data);
      
      var idPag = (id != null) ? id.value : "";
      //========================================================
      if (data.email == "") {
        //Condição para edição quando é o proprio email do usuário
        if (data.id != idPag) {
          emailEntrada.setCustomValidity("");
          $result.css('color', '#30dc30');
          $("#iresposta").text(data.email);
        }
      } else {
        /* console.log("ID do banco: "+data.id)
        console.log("ID da pagina edita : "+id.value) */
        if (data.id != idPag) {
          emailEntrada.setCustomValidity("E-mail já cadastrado!");
          emailEntrada.reportValidity();
          $result.css('color', '#dc3030');
          $("#iresposta").text(data.email);
        }
      }
    }
  });

}
$('#iemail').on('input', validateEmailExiste)