"use strict";

var API_URL = "https://api.github.com/users/rexoliveira/gists";

window.onload = function () {
  var ajax = new XMLHttpRequest();

  ajax.onreadystatechange = function () {
    if (this.readyState === 4 & this.status === 200) {
      var teste = JSON.parse(ajax.responseText);

      for (var i = 0; i < teste.length; i++) {
        console.log(teste[i]['files']);
      }
    }
  };

  ajax.open("GET", API_URL, true);
  ajax.send();
};