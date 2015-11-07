// Based on this tutorial: http://html-tuts.com/back-to-top-button-jquery/
var showAfterScrolled = 300;

$('a.back-to-top').click(function() {
		$('body, html').animate({
			scrollTop: 0
		}, 700);
		return false;
	});

$(window).resize(function() {
	if (window.innerWidth < 900) {
		console.log("hidden");
	    $('a.back-to-top').hide();
	}
});

$(window).scroll(function() {
	if (window.innerWidth >= 900){
		console.log($(window).scrollTop());
		if ( $(window).scrollTop() > showAfterScrolled ) {
			$('a.back-to-top').fadeIn('slow');
		} else {
			$('a.back-to-top').fadeOut('slow');
		}
	}
});

$(document).ready(function() {
	console.log('ready', window.innerWidth);
	if (window.innerWidth < 900) {
		console.log("hidden");
	    $('a.back-to-top').hide();
	}
});