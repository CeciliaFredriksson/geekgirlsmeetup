$ = jQuery;
$(document).ready(function() {
	$('.hamburger-menu').on('click', function() {
		$('.main-menu').toggleClass('unfolded folded');
	});
});