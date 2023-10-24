$(document).ready(function () {
    /* Sticky Nav */
    $(window).scroll(function () {
        var height = $('header.sticky').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height) {
            $('header.sticky').addClass('solid-nav-anim');
            $('header.sticky').addClass('shadow-md');
        } else {
            $('header.sticky').removeClass('solid-nav-anim');
            $('header.sticky').removeClass('shadow-md');
        }
    });
});