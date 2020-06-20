$(document).ready(function() {

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

    $("#go-to-distributor").click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#distribuitor").offset().top
        }, 'slow');
    });


});
