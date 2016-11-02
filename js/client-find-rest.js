$(document).ready(function () {

    //banner carousel
    $(".owl-carousel").owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        autoplaySpeed: 5000,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            767: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    });

    $(".news-content").mouseover(function () {
        var winW = $(document).width();
        if (winW >= 1620) {
            $("#sub-content").css("left", 1170 + (winW - 1170) / 2 + 10);
            $("#sub-content").css("display", "block");
        }

    })
    $(".news-content").click(function () {
        var winW = $(document).width();
        if (winW < 1620) {
            $("#promotion-diag").modal("show");
        }

    })
    $(".news-content").mouseout(function () {
        var winW = $(document).width();
        if (winW >= 1620) {
            $("#sub-content").css("display", "none");
        }
    })
});
