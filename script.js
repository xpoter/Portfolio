$(document).ready(function() {
	$("li:nth-child(1) a").click(function() {
   	$('html, body').animate({
        scrollTop: $("#about").offset().top
    	}, 1000);
	});

	$("li:nth-child(2) a").click(function() {
   	$('html, body').animate({
        scrollTop: $("#portfolio").offset().top
    	}, 1000);
	});

	$("li:nth-child(3) a").click(function() {
   	$('html, body').animate({
        scrollTop: $("#contact").offset().top
    	}, 1000);
	});
});
