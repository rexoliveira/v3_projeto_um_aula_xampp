
const header = document.querySelector('header')

$(function () {
 $('.toggle-menu').click(function(){
	$('.menu-topo').toggleClass('display');

	header.style.width = '100%'
	
 });
 
});