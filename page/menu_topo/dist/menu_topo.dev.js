"use strict";

var hea = document.querySelector('header');
$(function () {
  $('.toggle-menu').click(function () {
    $('.menu-topo').toggleClass('display');
    hea.style.width = '100%';
  });
});