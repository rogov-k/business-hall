$(document).ready(function () {
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
        $('.pop-up--content.lux').toggleClass('hide');
        $('.pop-up--fon').removeClass('hide');
        $('.content').toggleClass('p');
    });

    $('.common .number--button').on('click', function () {
        $('.pop-up--content.common').toggleClass('hide');
        $('.pop-up--fon').removeClass('hide');
        $('.content').toggleClass('p');
    });

    $('.pop-up--close').on('click', function () {
        $('.pop-up--content.common').addClass('hide');
        $('.pop-up--content.lux').addClass('hide');
        $('.pop-up--fon').addClass('hide');
        $('.content').toggleClass('p');
    });

    $('a.pop-up--close').on('click', function () {
        $('.pop-up--content.common').addClass('hide');
        $('.pop-up--content.lux').addClass('hide');
        $('.pop-up--fon').addClass('hide');
        $('.content').toggleClass('p');
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    $(".items--menu").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

});
