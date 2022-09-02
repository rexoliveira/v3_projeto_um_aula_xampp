"use strict";

/* Crédito:https://stackoverflow.com/questions/46155/how-can-i-validate-an-email-address-in-javascript */
var validateEmail = function validateEmail(email) {
  return email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
};

var validate = function validate() {
  var $result = $('#alert_email');
  var email = $('#iemail').val();
  $result.text('');
  $result.css('font-size', '12px');
  $result.css('margin', '5px 0px 0px 0px');
  $result.css('font-family', 'Arial, Helvetica, sans-serif');

  if (validateEmail(email)) {
    $result.text(email + ' - E-mail valido');
    $result.css('color', '#30dc30');
  } else {
    $result.text(email + ' - E-mail invalido');
    $result.css('color', '#dc3030');
  }

  return false;
};

$('#iemail').on('input', validate);