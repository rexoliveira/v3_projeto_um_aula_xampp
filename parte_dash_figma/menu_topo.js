
const hea = document.querySelector('header')

$(function () {
 $('.toggle-menu').click(function(){
	$('.exo-menu').toggleClass('display');

	hea.style.width = '100%'
	
 });
 
});