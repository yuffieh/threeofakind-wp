let $phpVar = {
    svg: php_vars.svg,
    imgs: php_vars.imgs,
};
(function ($) {
    $(function () {
        /**
         * Handles nav functionality adding CSS classes and toggling img
         */
        $(document).scroll(function () {
            let $nav = $('.nav-container');
            let $brand = $('.brand-icon');
            let brandLink = $phpVar.svg + 'recess-heart.svg';
            if($(this).scrollTop() > $brand.height()) {
                $('.brand-icon').attr('src', brandLink);
            }else {
                $('.brand-icon').attr('src', $phpVar.svg + 'word-logo.svg');
            }
            $brand.toggleClass('scrolled', $(this).scrollTop() > $brand.height());
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        });
        $('.test').delay(100).animate({'opacity':'1'},600);
    });

    $(window).bind('scroll',function(e){
        parallaxScroll();
    });

    function parallaxScroll(){
        var scrolledY = $(window).scrollTop();
        $('.overlay-absolute').css('top', '800' -((scrolledY*0.5))+'px');

    }




})(jQuery);
