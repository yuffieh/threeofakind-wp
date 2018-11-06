// let $phpVar = {
//     svg: php_vars.svg,
//     imgs: php_vars.imgs,
// };
(function ($) {
    $(function () {
        /**
         * Handles nav functionality adding CSS classes and toggling img
         */

        $(window).load(() => {
            $('.nav-container').delay(100).animate({'opacity': '1'}, 600);
        })

        $(document).scroll(() => {
            $('.about-img').delay(100).animate({'opacity': '1'}, 600);
            $('.about-img').delay(100).animate({'opacity': '1'}, 600);
            $('.about-me-content').delay(100).animate({'opacity': '1'}, 600);
        });

    });

    $(window).bind('scroll', function (e) {
        parallaxScroll();
    });


    function parallaxScroll() {
        var scrolledY = $(window).scrollTop();
        $('.overlay-absolute').css('top', '800' - ((scrolledY * 0.5)) + 'px');

    }


})(jQuery);
