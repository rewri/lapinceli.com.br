$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:50,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
                dots:false
            },
            600:{
                items:3,
                nav:false,
                dots:false
            },
            1000:{
                items:3,
                nav:true,
                loop:true,
                autoplay:true,
                dots:false
            }
        }
    });

    $('.goToBottom').click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, 2000);
    });

    var btn = $('#toTopButton');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, 1500);
    });


});
