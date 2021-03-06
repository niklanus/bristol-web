$(window).on("load resize",function(e){
	viewportWidth = $(window).width();
	viewportHeight = $(window).height();
	$('.header-full').height(viewportHeight);
	$('.header-full .slick-track').height(viewportHeight);
	$('.header-full .slide .bg').width(viewportWidth);
});

$( document ).ready(function() {
    $('.header-slider').slick({
	  dots: false,
	  arrows: false,
	  autoplay: true,
	  autoplaySpeed: 4500,
	  infinite: true,
	  speed: 1000,
	  fade: false,
	  pauseOnHover: false
	});

	$('.header-slider').slick('slickPause');

	$('.nav-panel').css('display', 'block');

	var panel = $('.nav-panel').scotchPanel({
	    containerSelector: '.body-wrapper',
	    direction: 'right',
	    duration: 350,
	    transition: 'ease-in-out',
	    clickSelector: '.nav-panel-toggle button',
	    distanceX: '250px',
	    enableEscapeKey: true
	});

	$(document).mouseup(function (e){
	    var panelSelector = $('.nav-panel')

	    if (!panelSelector.is(e.target)
			&& panelSelector.has(e.target).length === 0)
	    {
	        panel.close();
	    }
	});

	$('.smooth').smoothScroll({
		easing: 'easeOutCubic',
		speed: 800
	});
});

