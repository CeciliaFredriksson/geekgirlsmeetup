var $ = jQuery;
var scrollTo = '';

$('.scrollTo a').on('touchstart click', function(e) {
	e.preventDefault();
	$('.mobile-menu').toggleClass('mobile-unfolded');
	$('.mobile-hamburger-menu .fa').toggleClass('fa-bars fa-times');
	var target = $(this).html();
	target = target.toLowerCase();
	target = target.replace(' ', '-');

	var scrollTo = $('#' + target);
	console.log('sctollto: ', scrollTo, scrollTo.offset());
	$('body').delay(100).animate({
		scrollTop: scrollTo.offset().top - 70
	}, 600);
});

$('.hamburger-menu').on('click', function() {
	$('.main-menu').toggleClass('unfolded folded');
	$('.hamburger-menu .fa').toggleClass('fa-bars fa-times');
});

$('.mobile-hamburger-menu').on('click', function() {
	$('.mobile-menu').toggleClass('mobile-unfolded');
	$('.mobile-hamburger-menu .fa').toggleClass('fa-bars fa-times');
});

$(document).ready(function() {
	// no support for 100vh om ie, 
	var scaleElementViewport = function(selector, percentage) {
		
		$(selector).css("height", ($(window).innerHeight() * percentage) + "px");
		$(window).resize(function() {
			$(selector).css("height", ($(window).innerHeight() * percentage) + "px");
		});
    
	};
	scaleElementViewport(".main-menu, header", 1);
});