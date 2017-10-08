$( window ).resize(function() {
    var w = $(window).width();

    if (w <= 500) {
        $('body').addClass('mobile');
    } else {
        $('body').removeClass('mobile');
    }
});

$(document).ready(function () {
    $(window).trigger('resize');

    $('.slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    $('.slide-pop-up').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    var map;

    DG.then(function () {
        map = DG.map('map-2gis', {
            center: [52.282672, 104.27669],
            zoom: 17,
            fullscreenControl: false,
            scrollWheelZoom: false,
        });

        DG.marker([52.282672, 104.27669]).addTo(map);
    });

    (function () {
        var d = document, s = d.createElement('script');
        s.src = 'https://hotel9-fl8-ru.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    
    $('.lux .number--button').on('click', function () {
        $('.content').toggleClass('p');
        $('.pop-up--content.lux').toggleClass('hide');
        $('.pop-up--fon').removeClass('hide');
    });

    $('.common .number--button').on('click', function () {
        $('.content').toggleClass('p');
        $('.pop-up--content.common').toggleClass('hide');
        $('.pop-up--fon').removeClass('hide');
    });

    $('.pop-up--close').on('click', function () {
        $('.content').toggleClass('p');
        $('.pop-up--content.common').addClass('hide');
        $('.pop-up--content.lux').addClass('hide');
        $('.pop-up--fon').addClass('hide');
    });

    $('a.pop-up--close').on('click', function () {
        $('.content').toggleClass('p');
        $('.pop-up--content.common').addClass('hide');
        $('.pop-up--content.lux').addClass('hide');
        $('.pop-up--fon').addClass('hide');
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    $("body").on("click", "a.scroll", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) $('.up').fadeIn();
        else $('.up').fadeOut();
    });

    function openMenu() {
        $('.header-item.items--menu').show();
    };

    function closeMenu() {
        $('.header-item.items--menu').hide();
    };

    $('body.mobile').on('click', '.menu-toggle', function() {
        $('.content').toggleClass('p');
        if ($(this).hasClass('open')) {
            $(this).toggleClass('open');
            openMenu();
        } else {
            $(this).toggleClass('open');
            closeMenu();
        }
    });

    $('body.mobile').on('click', '.mt', function() {
        $('.menu-toggle').trigger('click');
    });

});
