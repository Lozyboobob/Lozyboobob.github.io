//resize to fit the left toggle 
function resize() {
    var leftH = $('.left-commands').height();
    var winH = $(document).height();
    var headerH = $(".rest-header").height() + $(".banner-top").outerHeight(true);
    var footerH = $("#footer-accp").height() + $(".footer").outerHeight(true);
    if (winH < leftH + headerH + footerH) {
        $("#footer-accp").css("margin-top", leftH + headerH + footerH - winH);
    } else {
        $("#footer-accp").css("margin-top", "0px");
    }
}
$(document).ready(function () {
    $(".cmd-encour").click(function () {
        var array = $(".cmd-encour");
        for (var i = 0; i < array.length; i++) {
            array.eq(i).removeClass("active");
        }
        $(this).addClass("active");
    })

    //left toggle for mobile screen
    $(".show-left-commands").click(function () {
        if ($('.left-commands').is(':visible')) {
            $('.left-commands').animate({
                'left': '-250px'
            }, 'slow', function () {
                $('.left-commands').hide();
            });
            $('.show-left-commands').animate({
                'left': '0px'
            }, 'slow', function () {});
            $('.right-content').animate({
                'margin-left': '0px'
            }, 'slow');
        } else {
            $('.left-commands').show();
            $('.left-commands').animate({
                'left': '0px'
            }, 'slow');
            $('.show-left-commands').animate({
                'left': '250px'
            }, 'slow');
            $('.right-content').animate({
                'margin-left': '250px'
            }, 'slow');
        }
    })

    resize();


});
