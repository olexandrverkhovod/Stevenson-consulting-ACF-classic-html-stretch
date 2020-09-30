// search button
setTimeout(function () {
    $('.search-btn .fa-search').click(function () {
        $('.search-field-wrapper').fadeToggle(300);
    })
}, 1000);
$(document).on('mouseup touchend', function (e) {
    var container = $(".search-field-wrapper");
    eventClass = e.target.className;
    if (!eventClass || !eventClass.includes('search-field-wrapper')) {
        if (container.has(e.target).length === 0) {
            $('.search-field-wrapper').fadeOut(300);
        }
    }
});
// nav toggle
$(document).ready(function () {
    $('.nav-toggle-btn').on('click', function () {
        $('body').toggleClass('show-nav');
    })
});
// services tiles
$(document).ready(function () {
    $('.col-img').on('mouseenter', function () {
        $('col-img').addClass('on');
    })
});

// $(window).scroll(function() {
$(window).scroll(function () {
    // body...
})
$(".animsition").animsition({
    inClass: 'fade-in-up',
    outClass: 'fade-out-up',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: ['animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay: false,
    overlayClass: 'animsition-overlay-slide',
    overlayParentElement: 'body',
    transition: function (url) {
        window.location.href = url;
    }
});
//
$(window).resize(function () { });

$(window).width(function () {
    if ($(window).width() > 768) {
        $('.header').addClass('stickytop');
    } else {
        $('.header').removeClass('stickytop');
    }
});

$(document).ready(function () {
    if ($(window).width() < 769) {
        $('.header').addClass('stickytop');
    } else {
        $('.header').removeClass('stickytop');


    }
});

(function ($) {
    $(window).scroll(function () {
        var st = $(this).scrollTop();
        if (st > 0) {
            $('.header').addClass('stickytop');
        } else {
            $('.header').removeClass('stickytop');
        }
        if ($('.vertical-process').length === 1) {
            $('.vertical-process').css({
                'top': (145 + $(window).scrollTop() * 0.5)
            });
            if ($(window).width() > 1000) {
                if ($(window).scrollTop() >= '440') {
                    $('.vertical-process').addClass('stop');
                } else {
                    $('.vertical-process').removeClass('stop');
                }
            }
        }

        if ($('.vertical-process-2').length === 1) {
            var verP = $('.featured-project').offset().top;
            $('.vertical-process-2').css({
                'top': (($(window).scrollTop() - verP) * 0.5)
            });
            if ($(window).width() > 1000) {
                if ($(window).scrollTop() >= '1980') {
                    $('.vertical-process-2').addClass('stop');
                } else {
                    $('.vertical-process-2').removeClass('stop');
                }
                if ($(window).scrollTop() <= '1650') {
                    $('.vertical-process-2').addClass('start');
                } else {
                    $('.vertical-process-2').removeClass('start');
                }
            }


        }

        if ($('.horizontal-process').length === 1) {
            if ($(window).width() > 1000) {
                $('.horizontal-process .horizontal-process-circle').css({
                    'left': (-200 + $(window).scrollTop() * 0.5)
                });
                if ($(window).scrollTop() >= '850') {
                    $('.horizontal-process').addClass('stop');
                } else {
                    $('.horizontal-process').removeClass('stop');
                }
                if ($(window).scrollTop() <= '390') {
                    $('.horizontal-process').addClass('start');
                } else {
                    $('.horizontal-process').removeClass('start');
                }
            }
        }
    });
})(jQuery);