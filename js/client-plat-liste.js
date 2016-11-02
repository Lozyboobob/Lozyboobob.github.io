function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('plat-list-map'), {
        center: {
            lat: -34.397,
            lng: 150.644
        },
        scrollwheel: false,
        zoom: 8
    });
}

$(document).ready(function () {
    initMap();


    //rating-diag
    $("#star1 + label").click(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', false);
        $("#star3").prop('checked', false);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star2 + label").click(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', false);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star3 + label").click(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star4 + label").click(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', true);
        $("#star5").prop('checked', false);
    })
    $("#star5 + label").click(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', true);
        $("#star5").prop('checked', true);
    })

    $("#star1 + label").hover(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', false);
        $("#star3").prop('checked', false);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star2 + label").hover(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', false);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star3 + label").hover(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', false);
        $("#star5").prop('checked', false);
    })
    $("#star4 + label").hover(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', true);
        $("#star5").prop('checked', false);
    })
    $("#star5 + label").hover(function () {
        $('#star1').prop('checked', true);
        $("#star2").prop('checked', true);
        $("#star3").prop('checked', true);
        $("#star4").prop('checked', true);
        $("#star5").prop('checked', true);
    })

    //plat detail
    $(".plat .left-part").click(function () {
        $("#rating-diag").modal("show");

    })
    $(".plat .ajouter-btn-md").click(function (event) {

    })

    //command
    $(".ma-command-field .selected-items .selected-item .left-part .plus").click(function () {
        var num = $(this).parent().children(".num").text();
        $(this).parent().children(".num").text(++num);
    })
    $(".ma-command-field .selected-items .selected-item .left-part .minus").click(function () {

        var num = $(this).parent().children(".num").text();
        if (num-- > 0) {
            $(this).parent().children(".num").text(num);
        }

    })

    //left navigation
    $("#list-left-nav li a").click(function () {
        $.each($("#list-left-nav li"), function (index, value) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        })
        $(this).parents("li").addClass("active");
    })
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $("body").animate({
                    scrollTop: target.offset().top - 95
                }, 1000);
                return false;
            }
        }

    });
    //change the position of left-nav

    var oriTop = $("#list-left-nav").offset().top;
    $(window).resize(function(){
        if ($(window).scrollTop() >= $(".banner-top-carte-list").height() + $(".liste-banner").height() + $(".header").height()) {
            $("#list-left-nav").css("position", "fixed");
            $("#list-left-nav").css("margin-left",($("#list-left-nav").parent().width() - $("#list-left-nav").width()));

        }
    })
    $(window).scroll(function () {
        if ($(window).scrollTop() >= $(".banner-top-carte-list").height() + $(".liste-banner").height() + $(".header").height()) {
            $("#list-left-nav").css("position", "fixed");
            $("#list-left-nav").css("margin-left",  ($("#list-left-nav").parent().width() - $("#list-left-nav").width()));
            $("#list-left-nav").css("top", oriTop - ($(".banner-top-carte-list").height() + $(".liste-banner").height() + $(".header").height()));

        }
        else{
            $("#list-left-nav").css("position", "static");
            $("#list-left-nav").css("margin-left", "auto");
            $("#list-left-nav").css("top","auto");
        }
    })
})
