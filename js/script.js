$ = jQuery;
$(document).ready(function() {
	$('.hamburger-menu').on('click', function() {
		$('.main-menu').toggleClass('unfolded folded');
		$('.hamburger-menu .fa').toggleClass('fa-bars fa-times');
	});
	
	$('.mobile-hamburger-menu').on('click', function() {
		$('.mobile-menu').toggleClass('mobile-unfolded');
		$('.mobile-hamburger-menu .fa').toggleClass('fa-bars fa-times');
	});
	
	// no support for 100vh om ie, 
	var scaleElementViewport = function(selector, percentage) {
		
		$(selector).css("height", ($(window).innerHeight() * percentage) + "px");
		$(window).resize(function() {
			$(selector).css("height", ($(window).innerHeight() * percentage) + "px");
		});
    
	};
	scaleElementViewport(".main-menu, header", 1);
});