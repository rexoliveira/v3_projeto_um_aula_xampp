"use strict";

//JQuery e JavaScript
var validateEmailExiste = function validateEmailExiste() {
  var $result = $('#iresposta');
  var emailEntrada = document.getElementById('iemail'); //ID editar usuário

  var id = document.getElementById('id'); //JQuery

  $.ajax({
    url: '../../page/registro/verifica_email.php',
    type: 'POST',
    data: {
      "email": emailEntrada.value
    },
    success: function success(data) {
      //console.log(data); 
      data = $.parseJSON(data); //========================================================

      if (data.email == "") {
        //Condição para edição quando é o proprio email do usuário
        if (data.id != id.value) {
          emailEntrada.setCustomValidity("");
          $result.css('color', '#30dc30');
          $("#iresposta").text(data.email);
        }
      } else {
        /* console.log("ID do banco: "+data.id)
        console.log("ID da pagina edita : "+id.value) */
        if (data.id != id.value) {
          emailEntrada.setCustomValidity("E-mail já cadastrado!");
          emailEntrada.reportValidity();
          $result.css('color', '#dc3030');
          $("#iresposta").text(data.email);
        }
      }
    }
  });
};

$('#iemail').on('input', validateEmailExiste);