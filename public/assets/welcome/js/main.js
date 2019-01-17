(function ($) {

    "use strict";
    $(window).on("load", function () {
        $('.preloader').fadeOut(500);
    });
    
    /*---------------------------
     MICHIMP INTEGRATION
    -----------------------------*/
    $('#mc-form').ajaxChimp({
        url: 'http://facebook.us14.list-manage.com/subscribe/post?u=b2a3f199e321346f8785d48fb&amp;id=6d023c55e5', //Set Your Mailchamp URL
        callback: function (resp) {
            if (resp.result === 'success') {
                $('.subscribe-form input, .subscribe-form button').fadeOut();
            }
        }
    });
    $('.header-bg').ripples({
        resolution: 512,
        dropRadius: 20, //px
        perturbance: 0.04,
    });
    // Automatic drops
    setInterval(function () {
        var $el = $('.header-bg');
        var x = Math.random() * $el.outerWidth();
        var y = Math.random() * $el.outerHeight();
        var dropRadius = 20;
        var strength = 0.04 + Math.random() * 0.04;

        $el.ripples('drop', x, y, dropRadius, strength);
    }, 400);



})(jQuery);