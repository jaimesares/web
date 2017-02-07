require('./bootstrap');

$('.more-projects').on('click', function () {
    $(this).hide();
    $('.projects .row.hide').removeClass('hide');
});

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});