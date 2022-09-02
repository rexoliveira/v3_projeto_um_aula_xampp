"use strict";

var validateEmailExiste = function validateEmailExiste() {
  var $result = $('#iresposta');
  var emailEntrada = $('#iemail').val();
  /* $result.text('');
  $result.css('font-size', '12px');
  $result.css('margin', '5px 0px 0px 0px');
  $result.css('font-family', 'Arial, Helvetica, sans-serif'); */
  //=============================================================

  $.ajax({
    url: 'verifica_email.php',
    type: 'POST',
    data: {
      "email": emailEntrada
    },
    success: function success(data) {
      console.log(data);
      data = $.parseJSON(data);
      $("#iresposta").text(data.email);
    }
  }); //============================================================= 

  /* if (validateEmail(email)) {
    $result.text(email + ' - E-mail valido');
    $result.css('color', '#30dc30');
  } else {
    $result.text(email + ' - E-mail invalido');
    $result.css('color', '#dc3030');
  }
  return false; */
};

$('#iemail').on('input', validateEmailExiste);