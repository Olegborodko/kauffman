/**
 * Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */

(function ($) {
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

    wp.customize('blogdescription', function (value) {
        value.bind(function (to) {
            $('.site-header .site-logo').text('');
            $('.site-footer .site-logo').text('');
            var text = '';
            var text2 = '';
            if ((wp.customize.instance('mp_entrepreneur_logo').get() !== '') || (to !== '') || (wp.customize.instance('blogname').get() !== '')) {
                text += '<a class="home-link" href="#" title="" rel="home">';
                if (wp.customize.instance('mp_entrepreneur_logo').get() !== '') {
                    text += '<div class="header-logo "><img src="' + wp.customize.instance('mp_entrepreneur_logo').get() + '" alt=""></div>';
                }

                text += '<div class="site-description">';
                text += '<h1 class="site-title';
                if (to !== '') {
                    text += ' empty-tagline';
                }
                text += '">' + wp.customize.instance('blogname').get() + '</h1>';
                text += '<p class="site-tagline">' + to + '</p>';
                text += '</div>';
                text += '</a>';
            }
            if (wp.customize.instance('mp_entrepreneur_logo_footer')) {
                if ((wp.customize.instance('mp_entrepreneur_logo_footer').get() !== '') || (to !== '') || (wp.customize.instance('blogname').get() !== '')) {
                    text2 += '<a class="home-link" href="#" title="" rel="home">';
                    if (wp.customize.instance('mp_entrepreneur_logo_footer').get() !== '') {
                        text2 += '<div class="header-logo "><img src="' + wp.customize.instance('mp_entrepreneur_logo_footer').get() + '" alt=""></div>';
                    }

                    text2 += '<div class="site-description" ';
                    if (to === '') {
                        text2 += 'style="margin:0;"';
                    }
                    text2 += '>';
                    text2 += '<h1 class="site-title';
                    if (to !== '') {
                        text2 += ' empty-tagline';
                    }
                    text2 += '">' + wp.customize.instance('blogname').get() + '</h1>';

                    text2 += '<p class="site-tagline">' + to + '</p>';

                    text2 += '</div>';
                    text2 += '</a>';
                }
            }
            $('.site-header .site-logo').append(text);
            $('.site-footer .site-logo').append(text2);
            menu_align();
        });
    });
    wp.customize('header_textcolor', function (value) {
        value.bind(function (to) {
            if ('blank' == to) {
                $('.site-description').hide();
            } else {
                $('.site-description').show();
            }
        });
    });
    wp.customize('blogname', function (value) {
        value.bind(function (to) {
            $('.site-header .site-logo').text('');
            $('.site-footer .site-logo').text('');
            var text = '';
            var text2 = '';
            if ((wp.customize.instance('mp_entrepreneur_logo').get() !== '') || (wp.customize.instance('blogdescription').get() !== '') || (to !== '')) {
                text += '<a class="home-link" href="#" title="" rel="home">';
                if (wp.customize.instance('mp_entrepreneur_logo').get() !== '') {
                    text += '<div class="header-logo "><img src="' + wp.customize.instance('mp_entrepreneur_logo').get() + '" alt=""></div>';
                }

                text += '<div class="site-description">';
                text += '<h1 class="site-title';
                if (wp.customize.instance('blogdescription').get() !== '') {
                    text += ' empty-tagline';
                }
                text += '">' + to + '</h1>';
                text += '<p class="site-tagline">' + wp.customize.instance('blogdescription').get() + '</p>';

                text += '</div>';
                text += '</a>';
            }
            if (wp.customize.instance('mp_entrepreneur_logo_footer')) {
                if ((wp.customize.instance('mp_entrepreneur_logo_footer').get() !== '') || (wp.customize.instance('blogdescription').get() !== '') || (to !== '')) {
                    text2 += '<a class="home-link" href="#" title="" rel="home">';
                    if (wp.customize.instance('mp_entrepreneur_logo_footer').get() !== '') {
                        text2 += '<div class="header-logo "><img src="' + wp.customize.instance('mp_entrepreneur_logo_footer').get() + '" alt=""></div>';
                    }
                    text2 += '<div class="site-description" ';
                    if (wp.customize.instance('blogdescription').get() === '') {
                        text2 += 'style="margin:0;"';
                    }
                    text2 += '>';
                    text2 += '<h1 class="site-title';
                    text2 += ' empty-tagline';

                    text2 += '">' + to + '</h1>';
                    if (wp.customize.instance('blogdescription').get() !== '') {
                        text2 += '<p class="site-tagline">' + wp.customize.instance('blogdescription').get() + '</p>';
                    }
                    text2 += '</div>';
                    text2 += '</a>';
                }
            }
            $('.site-header .site-logo').append(text);
            $('.site-footer .site-logo').append(text2);
            menu_align();
        });
    });
    wp.customize('header_textcolor', function (value) {
        value.bind(function (to) {
            $('.main-header .site-title').css('color', to);
        });
    });


    wp.customize('mp_entrepreneur_copyright', function (value) {
        value.bind(function (to) {
            var text = '<span class="copyright-date">' + $('.site-footer .copyright-date').text() + '</span>';
            $('.site-footer .copyright').text('');
            if (to !== '') {
                text += to;
            }
            $('.site-footer .copyright').html(text);
        });

    });

    wp.customize('mp_entrepreneur_news_title', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.news-section .section-header').text('');
            if (to !== '') {
                text += '<h2 class="section-title">' + to + '</h2>';
            }
            if (wp.customize.instance('mp_entrepreneur_news_subtitle').get() !== '') {
                text += '<div class="section-subtitle">' + wp.customize.instance('mp_entrepreneur_news_subtitle').get() + '</div>';
            }
            $('.news-section .section-header').append(text);
        });
    });
    wp.customize('mp_entrepreneur_news_subtitle', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.news-section .section-header').text('');
            if (wp.customize.instance('mp_entrepreneur_news_title').get() !== '') {
                text += '<h2 class="section-title">' + wp.customize.instance('mp_entrepreneur_news_title').get() + '</h2>';
            }
            if (to !== '') {
                text += '<div class="section-subtitle">' + to + '</div>';
            }
            $('.news-section .section-header').append(text);
        });
    });
    wp.customize('mp_entrepreneur_news_button_label', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.news-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_news_button_url').get() !== '') {
                text += '<a href="' + wp.customize.instance('mp_entrepreneur_news_button_url').get() + '" title="' + to + '" class="button white-button">' + to + '</a> ';
            }
            $('.news-section .section-buttons').append(text);
        });
    });
    wp.customize('mp_entrepreneur_news_button_url', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.news-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_news_button_label').get() !== '') {
                text += '<a href="' + to + '" title="' + wp.customize.instance('mp_entrepreneur_news_button_label').get() + '" class="button white-button">' + wp.customize.instance('mp_entrepreneur_news_button_label').get() + '</a> ';
            }
            $('.news-section .section-buttons').append(text);
        });
    });
    wp.customize('mp_entrepreneur_call_to_action_title', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.call-to-action-section .section-header').text('');
            if (to !== '') {
                text += '<h2>' + to + '</h2>';
            }
            $('.call-to-action-section .section-header').append(text);
        });
    });
    wp.customize('mp_entrepreneur_first_section_button_label', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.first-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_first_section_button_url').get() !== '') {
                text += '<a href="' + wp.customize.instance('mp_entrepreneur_first_section_button_url').get() + '" title="' + to + '" class="button button-size-large">' + to + '</a> ';
            }
            $('.first-section .section-buttons').append(text);
        });
    });
    wp.customize('mp_entrepreneur_first_section_button_url', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.first-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_first_section_button_label').get() !== '') {
                text += '<a href="' + to + '" title="' + wp.customize.instance('mp_entrepreneur_first_section_button_label').get() + '" class="button button-size-large">' + wp.customize.instance('mp_entrepreneur_first_section_button_label').get() + '</a> ';
            }
            $('.first-section .section-buttons').append(text);
        });
    });
    wp.customize('mp_entrepreneur_portfolio_title', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.portfolio-section .section-header').text('');
            if (to !== '') {
                text += '<h2 class="section-title">' + to + '</h2>';
            }
            $('.portfolio-section .section-header').append(text);
        });
    });

    wp.customize('mp_entrepreneur_services_title', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.services-section .section-header').text('');
            if (to !== '') {
                text += '<h2 class="section-title">' + to + '</h2>';
            }
            $('.services-section .section-header').append(text);
        });
    });

    wp.customize('mp_entrepreneur_services_button_label', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.services-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_services_button_url').get() !== '') {
                text += '<a href="' + wp.customize.instance('mp_entrepreneur_services_button_url').get() + '" title="' + to + '" class="button button-size-large">' + to + '</a> ';
            }
            $('.services-section .section-buttons').append(text);
        });
    });
    wp.customize('mp_entrepreneur_services_button_url', function (value) {
        value.bind(function (to) {
            var text = '';
            $('.services-section .section-buttons').text('');
            if (to !== '' && wp.customize.instance('mp_entrepreneur_services_button_label').get() !== '') {
                text += '<a href="' + to + '" title="' + wp.customize.instance('mp_entrepreneur_services_button_label').get() + '" class="button button-size-large">' + wp.customize.instance('mp_entrepreneur_services_button_label').get() + '</a> ';
            }
            $('.services-section .section-buttons').append(text);
        });
    });
})(jQuery);
