$(window).resize(function(e){
    viewportWidth = $(window).width();
    viewportHeight = $(window).height();
    $('.header-full').height(viewportHeight);
    $('.header-full .slick-track').height(viewportHeight);
    $('.header-full .slide .bg').width(viewportWidth);

    if (viewportHeight < 600) {
        $('.tripadvisor').css({'top': viewportHeight+15, 'bottom': 'auto', 'position': 'relative', 'margin': '0 auto'});
        $('.section-about').css({'padding-top': 175});
    } else {
        $('.tripadvisor').attr({style : ""});
        $('.section-about').attr({style : ""});
    }
    
}).resize();

$( document ).ready(function() {
    /*$('.header-slider').slick({
      dots: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4500,
      infinite: true,
      speed: 1000,
      fade: false,
      pauseOnHover: false
    });

    $('.header-slider').slick('slickPause');*/

    $('.room-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        arrows: false
    });

    $('.list-item-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        arrows: false
    });

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
        var panelSelector = $('.nav-panel');

        if (!panelSelector.is(e.target) && panelSelector.has(e.target).length === 0) {
            panel.close();
        }
    });

    $('.smooth').smoothScroll({
        easing: 'easeOutCubic',
        speed: 800
    });
});

