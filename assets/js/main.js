jQuery(document).ready(function($) {
    var header = $('.header-area');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    });

    $('#menu-main-menu').slicknav();
});
