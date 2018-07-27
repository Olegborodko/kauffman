(function ($) {
    "use strict";


    function menu_align() {
        var headerWrap = $('.site-header');
        var navWrap = $('.navbar');
        var logoWrap = $('.site-logo');
        var containerWrap = $('.container');
        var classToAdd = 'header-align-center';
        if (headerWrap.hasClass(classToAdd)) {
            headerWrap.removeClass(classToAdd);
        }
        var logoWidth = logoWrap.outerWidth();
        var menuWidth = navWrap.outerWidth();
        var containerWidth = containerWrap.width();
        if (menuWidth + logoWidth > containerWidth) {
            headerWrap.addClass(classToAdd);
        } else {
            if (headerWrap.hasClass(classToAdd)) {
                headerWrap.removeClass(classToAdd);
            }
        }

    }

    function ifraimeResize() {
        $('.entry-video iframe:visible , .entry-content iframe:visible').each(function () {
            var parentWidth = $(this).parent().width();
            var thisWidth = $(this).attr('width');
            var thisHeight = $(this).attr('height');
            $(this).css('width', parentWidth);
            var newHeight = thisHeight * parentWidth / thisWidth;
            $(this).css('height', newHeight);
        });
    }


    $(document).ready(function () {
        $('body').on('click', '.mobile-menu', function (e) {
            e.preventDefault();
            if ($(window).width() < 992) {
                $('.main-header #main-menu').toggleClass('active');
                $('.main-header #main-menu').slideToggle(500);
                $(this).toggleClass('open');
            }
        });
        /*
         * Superfish menu
         */
        var example = $('#main-menu').superfish({
            onBeforeShow: function () {
                $(this).removeClass('toleft');
                if ($(this).parent().offset()) {
                    if (($(this).parent().offset().left + $(this).parent().width() - $(window).width() + 170) > 0) {
                        $(this).addClass('toleft');
                    }
                }
            }
        });

        ifraimeResize();


        $(window).load(function () {
            menu_align();
            ifraimeResize();

        });
        $(window).scroll(function () {
            /*
             * Stycky menu
             */
            if ($('.site-header').attr('data-sticky-menu') === 'on') {
                var y = $(this).scrollTop();
                if (y >= top) {
                    $('.site-header').addClass('fixed');
                } else {
                    $('.site-header').removeClass('fixed');
                }
            }
            var addTo = 0;
            if ($('.site-header').attr('data-sticky-menu') === 'on' && $(window).width() > 767) {
                if ($('.site-header').hasClass('fixed')) {
                    addTo = $('.site-header').outerHeight();
                } else {
                    addTo = $('.site-header').outerHeight() + $('.site-header').outerHeight();
                }
            }

        });
        $(window).resize(function () {
            menu_align();
            ifraimeResize();
        });
    });
})(jQuery);