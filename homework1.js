$(document).ready(function() {

$('button').click(function() {

$('h1').animate({'font-size': '+70px'}, 800);
$('h1').animate({'font-size': '32px'}, 800);
$('h1').css('color', 'maroon');

$('img').css({
	'border-color': 'maroon', 
	'border-weight': '1px', 
	'border-style': 'dotted'});
});
});