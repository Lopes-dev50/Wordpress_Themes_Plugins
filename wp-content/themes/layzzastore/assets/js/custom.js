jQuery(document).ready(function($) {
    $('.mobile-menu-toggle').click(function() {
        $('.menu-mobile').slideToggle();
    });

    $(window).resize(function() {
        if ($(window).width() > 768) {
            $('.menu-mobile').hide();
        }
    });
});


