$(document).ready(function () {
    /* Sticky Nav */
    $(window).scroll(function () {
        var height = $('header').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height) {
            $('header').addClass('solid-nav');
            $('header').addClass('shadow-md');
        } else {
            $('header').removeClass('solid-nav');
            $('header').removeClass('shadow-md');
        }
    });
});