/**
 * Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */


(function ($) {
    $(document).ready(function () {
        $('body').on('click', '.accordion-section-title', function () {
            if ($('#customize-preview').hasClass('iframe-ready')) {
                var parentid = $(this).parent().attr('id');
                var iframe = $('#customize-preview iframe');
                var iframeContents = iframe.contents();
                if (!iframeContents.find('body').hasClass('page-template-template-front-page')) {
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_first_section') {
                    mp_theme_preview_scroll(iframeContents, "#first-section");
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_news_section') {
                    mp_theme_preview_scroll(iframeContents, "#news");
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_call_to_action_section') {
                    mp_theme_preview_scroll(iframeContents, "#call-to-action");
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_testimonials_section') {
                    mp_theme_preview_scroll(iframeContents, "#testimonials");
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_portfolio_section') {
                    mp_theme_preview_scroll(iframeContents, "#portfolio");
                    return;
                }
                if (parentid === 'accordion-section-mp_entrepreneur_services_section') {
                    mp_theme_preview_scroll(iframeContents, "#services");
                    return;
                }
            }
        });
        function mp_theme_preview_scroll(holder, animateto) {
            if (holder && holder.find(animateto).length) {
                holder.find('html, body').animate({
                    scrollTop: holder.find(animateto).offset().top
                }, 1000);
            }
        }
    });
})(jQuery);
