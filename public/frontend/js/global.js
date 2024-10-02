/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: "Modesto"*/
/* Version: 1.0 Initial Release*/
/* Build Date: 06-02-2016*/
/* Author: LionStyle*/
/* Website: http://moonart.net.ua/modesto/ 
 /* Copyright: (C) 2016 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - VARIABLES */
/* 02 - page calculations */
/* 03 - function on document ready */
/* 04 - function on page load */
/* 05 - function on page resize */
/* 06 - function on page scroll */
/* 07 - swiper sliders */
/* 08 - buttons, clicks, hovers */


$(function () {

    "use strict";

    /*================*/
    /* 01 - VARIABLES */
    /*================*/
    var swipers = [], winW, winH, winScr, footerTop, _isresponsive, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

    /*========================*/
    /* 02 - page calculations */
    /*========================*/
    function pageCalculations() {
        winW = $(window).width();
        winH = $(window).height();
        footerTop = ($('footer').length) ? $('footer').offset().top : 0;
        if ($('.portfolio-detail-related-entry').length)
            footerTop = $('.portfolio-detail-related-entry').offset().top;
        if ($('.menu-button').is(':visible'))
            _isresponsive = true;
        else
            _isresponsive = false;
        $('.page-height').css({'height': winH, 'min-height': (winH < 480) ? 480 : winH});
        if (winH <= 600)
            $('body').addClass('min-height');
        else
            $('body').removeClass('min-height');
        $('.rotate').each(function () {
            $(this).css({'width': $(this).parent().height()});
        });
    }

    /*=================================*/
    /* 03 - function on document ready */
    /*=================================*/
    $('.input').each(function () {
        if ($(this).val() !== '')
            $(this).parent().addClass('focus');
    });
    if (_ismobile)
        $('body').addClass('mobile');
    pageCalculations();



    /*==============================*/
    /* 05 - function on page resize */
    /*==============================*/
    function resizeCall() {
        pageCalculations();
    }
    if (!_ismobile) {
        $(window).resize(function () {
            resizeCall();
        });
    } else {
        window.addEventListener("orientationchange", function () {
            resizeCall();
        }, false);
    }

    /*==============================*/
    /* 06 - function on page scroll */
    /*==============================*/
    $(window).scroll(function () {
        scrollCall();
    });

    function scrollCall() {
        winScr = $(window).scrollTop();
        if (winScr > ((winW >= 992) ? 70 : 50))
            $('header.fixed').addClass('scrolled');
        else
            $('header.fixed').removeClass('scrolled');
        if ($('.homepage-4-slider-navigation').length) {
            if (winScr + winH - 115 >= footerTop)
                $('.homepage-4-slider-navigation .rotate').css({'margin-top': (-1) * (winScr + winH - footerTop - 115)});
            else
                $('.homepage-4-slider-navigation .rotate').css({'margin-top': '0px'});
        }
    }

    /*=====================*/
    /* 07 - swiper sliders */
    /*=====================*/

    function initSwiper() {
        var initIterator = 0;
        $('.swiper-container').each(function () {
            var $t = $(this);

            var index = 'swiper-unique-id-' + initIterator;

            $t.addClass('swiper-' + index + ' initialized').attr('id', index);
            $t.find('.swiper-pagination').addClass('swiper-pagination-' + index);
            $t.find('.swiper-button-prev').addClass('swiper-button-prev-' + index);
            $t.find('.swiper-button-next').addClass('swiper-button-next-' + index);
            if ($t.find('.swiper-slide').length <= 1)
                $('.slider-click[data-pagination-rel="' + $t.data('pagination-rel') + '"]').addClass('disabled');

            var slidesPerViewVar = ($t.data('slides-per-view')) ? $t.data('slides-per-view') : 1,
                    loopVar = ($t.data('loop')) ? parseInt($t.data('loop'), 10) : 0;
            if (slidesPerViewVar != 'auto')
                slidesPerViewVar = parseInt(slidesPerViewVar, 10);

            swipers['swiper-' + index] = new Swiper('.swiper-' + index, {
                pagination: '.swiper-pagination-' + index,
                paginationClickable: true,
                nextButton: '.swiper-button-next-' + index,
                prevButton: '.swiper-button-prev-' + index,
                slidesPerView: slidesPerViewVar,
                autoHeight: ($t.data('auto-height')) ? parseInt($t.data('auto-height'), 10) : 0,
                loop: loopVar,
//                autoplay: false,
                autoplay: ($t.data('autoplay')) ? parseInt($t.data('autoplay'), 10) : 0,
                centeredSlides: ($t.data('center')) ? parseInt($t.data('center'), 10) : 0,
                breakpoints: ($t.data('breakpoints')) ? {767: {slidesPerView: parseInt($t.attr('data-xs-slides'), 10)}, 991: {slidesPerView: parseInt($t.attr('data-sm-slides'), 10)}, 1199: {slidesPerView: parseInt($t.attr('data-md-slides'), 10)}} : {},
                initialSlide: ($t.data('ini')) ? parseInt($t.data('ini'), 10) : 0,
                watchSlidesProgress: true,
                speed: ($t.data('speed')) ? parseInt($t.data('speed'), 10) : 500,
                parallax: ($t.data('parallax')) ? parseInt($t.data('parallax'), 10) : 0,
                slideToClickedSlide: true,
                keyboardControl: true,
                mousewheelControl: ($t.data('mousewheel')) ? parseInt($t.data('mousewheel'), 10) : 0,
                mousewheelReleaseOnEdges: true,
                direction: ($t.data('direction')) ? $t.data('direction') : 'horizontal',
                onProgress: function (swiper, progress) {
                    watchSwiperProgress($t, swiper, swiper.activeIndex);
                },
                onSlideChangeStart: function (swiper) {
                    var activeIndex = (loopVar == 1) ? swiper.activeLoopIndex : swiper.activeIndex;
                    watchSwiperProgress($t, swiper, activeIndex);
                },
                onTransitionEnd: function (swiper) {
                    var activeIndex = (loopVar == 1) ? swiper.activeLoopIndex : swiper.activeIndex;
                    if ($('.slider-click[data-pagination-rel="' + $t.data('pagination-rel') + '"]').length) {
                        var updateLeftNum = $('.slider-click.left[data-pagination-rel="' + $t.data('pagination-rel') + '"]'),
                                updateRightNum = $('.slider-click.right[data-pagination-rel="' + $t.data('pagination-rel') + '"]');
                        if (loopVar != 1) {
                            if (activeIndex < 1)
                                updateLeftNum.addClass('disabled');
                            else
                                updateLeftNum.removeClass('disabled').find('.left').text(activeIndex);
                            if (activeIndex + 2 > swiper.slides.length)
                                updateRightNum.addClass('disabled');
                            else
                                updateRightNum.removeClass('disabled').find('.left').text(activeIndex + 2);
                            updateLeftNum.find('.preview-entry.active').removeClass('active');
                            updateLeftNum.find('.preview-entry[data-rel="' + (activeIndex - 1) + '"]').addClass('active');
                            updateRightNum.find('.preview-entry.active').removeClass('active');
                            updateRightNum.find('.preview-entry[data-rel="' + (activeIndex + 1) + '"]').addClass('active');
                        }
                    }
                }
            });
            swipers['swiper-' + index].update();
            initIterator++;
        });

    }

    function watchSwiperProgress(container, swiper, index) {
        if ($('.homepage-1-backgrounds[data-pagination-rel="' + container.data('pagination-rel') + '"]').length) {
            $('.homepage-1-backgrounds .entry.active').removeClass('active');
            $('.homepage-1-backgrounds .entry[data-rel=' + index + ']').addClass('active');
        }
        if ($('.slider-click-label[data-pagination-rel="' + container.data('pagination-rel') + '"]').length) {
            $('.slider-click-label[data-pagination-rel="' + container.data('pagination-rel') + '"]').removeClass('active prev next');
            $('.slider-click-label[data-pagination-rel="' + container.data('pagination-rel') + '"][data-slide-to="' + index + '"]').addClass('active');
        }
        if ($('.pagination-slider-wrapper[data-pagination-rel="' + container.data('pagination-rel') + '"]').length) {
            var foo = $('.pagination-slider-wrapper[data-pagination-rel="' + container.data('pagination-rel') + '"]');
            foo.css({'top': (-1) * parseInt(foo.find('.active').attr('data-slide-to'), 10) * foo.parent().height()});
        }
    }

    $('.slider-click.left').on('click', function () {
        if ($(this)[0].hasAttribute('data-pagination-rel')) {
            swipers['swiper-' + $('.swiper-container[data-pagination-rel="' + $(this).data('pagination-rel') + '"]').attr('id')].slidePrev();
            $(this).find('.preview-entry').removeClass('active');
        }
    });

    $('.slider-click.right').on('click', function () {
        if ($(this)[0].hasAttribute('data-pagination-rel')) {
            swipers['swiper-' + $('.swiper-container[data-pagination-rel="' + $(this).data('pagination-rel') + '"]').attr('id')].slideNext();
            $(this).find('.preview-entry').removeClass('active');
        }
    });

    $('.slider-click-label').on('click', function () {
        swipers['swiper-' + $('.swiper-container[data-pagination-rel="' + $(this).data('pagination-rel') + '"]').attr('id')].slideTo($(this).data('slide-to'));
    });


    /*==============================*/
    /* 08 - buttons, clicks, hovers */
    /*==============================*/

//click on button, that scrolls page
    $('.scroll-button').on('click', function () {
        $('body, html').animate({'scrollTop': (winH <= 600) ? 600 : winH - 80});
        return false;
    });

    //toggle side navigation
    $('.open-navigation, header .close-layer').on('click', function () {
        $('body').toggleClass('open-menu');
        $('header .close-layer').toggleClass('active');
    });

    //responsive menu nested lists
    $('.toggle-icon').on('click', function () {
        $(this).toggleClass('active').next().slideToggle().prev().prev().toggleClass('selected');
    });

    //input animations on focus
    $('.input').on('focus', function () {
        $(this).parent().addClass('focus');
    });

    $('.input').on('blur', function () {
        if ($(this).val() === '')
            $(this).parent().removeClass('focus');
    });


    //responsive filtration block
    $('.responsive-filtration-title').on('click', function () {
        $(this).toggleClass('active');
    });

    //tabulation
    $('.tab-menu').on('click', function () {
        if ($(this).hasClass('active'))
            return false;
        var $this = $(this);
        $(this).parent().parent().find('.active').removeClass('active');
        $(this).addClass('active');
        $(this).closest('.sorting-menu').find('.responsive-filtration-title .text').text($(this).text());
        $('.tab-entry[data-tab-menu="' + $this.data('tab-menu') + '"]:visible').animate({'opacity': '0'}, function () {
            $(this).hide();
            var tab = $('.tab-entry[data-tab-menu="' + $this.data('tab-menu') + '"][data-tab="' + $this.data('tab') + '"]');
            tab.show();
            tab.animate({'opacity': '1'});
            swipers['swiper-' + tab.find('.swiper-container').attr('id')].update();
        });
    });

    $(window).load(function () {
        initSwiper();
    });

});

$(function () {

    $('a[href*=#]:not(.carousel-control)').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });

});


// poster frame click event
$(document).on('click', '.js-videoPoster', function (ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    // hide poster
    $wrapper.addClass('videoWrapperActive');
    // add iframe src in, starting the video
    $iframe.attr('src', src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
        var $wrapper = $('.js-videoWrapper');
        var $iframe = $('.js-videoIframe');
        // if we're stopping a particular video
    } else {
        var $iframe = $wrapper.find('.js-videoIframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src', '');
}