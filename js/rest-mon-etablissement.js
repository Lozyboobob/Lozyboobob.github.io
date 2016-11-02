$(document).ready(function () {
    window.IS_LOGIN = true;

    //cuisine selector
    var cuisineN = 0;
    var TOTAL_CUISINE = 24;
    $("#cuisine-selector .mask-transparent").click(function () {
        cuisineN++;
        console.log("cuisine n is " + cuisineN);
        $("+ .mask .cuisine-n", this).text(cuisineN);
        $("+ .mask", this).css("display", "block");
        console.log("mask is ");
        console.log($("+ .mask", this));
    })
    $("#cuisine-selector .mask").click(function () {
        $(this).css("display", "none");
        var curN = $(".cuisine-n", this).text();
        console.log("curn:" + curN);
        for (var i = 0; i < TOTAL_CUISINE; i++) {
            var curOb = $(".cuisine-n").eq(i);
            var value = curOb.text();
            console.log("in the loop,for " + i + ": curOb is " + value);
            if (value > curN) {
                console.log("this value should be chang");
                curOb.text(value - 1);
            }

        }
        cuisineN--;
        $(".cuisine-n", this).text("");
    })

    //banque de image
    var TOTAL_IMAGE = 12;
    var rows = ["row-1", "row-2", "row-3"];
    var collapse_selector = ["#collapse-row-1", "#collapse-row-2", "#collapse-row-3"];
    var TOTAL_ROW = 3;
    $(".toggle-image").click(function () {
        //set image to active
        for (var i = 0; i < TOTAL_IMAGE; i++) {
            if ($(".toggle-image").eq(i).hasClass("active")) {
                $(".toggle-image").eq(i).removeClass("active");
            }
        }
        $(this).addClass("active");
        //get id of img and set carousel to the corresponding page
        var num = $(this).attr('id');
        $(".banque-de-image-carousel").carousel(num - 1);
        //if the carousel under the clicked-pic is not showed, then set the showed carousel hide

        for (var i = 0; i < TOTAL_ROW; i++) {
            if ($(this).hasClass(rows[i])) {
                for (var j = 0; j < TOTAL_ROW; j++) {
                    if (j != i) {
                        $(collapse_selector[j]).collapse('hide');
                    } else {
                        $(collapse_selector[j]).collapse('show');
                    }
                }
            }
        }



    })

    function close_carousel() {
        for (var j = 0; j < TOTAL_ROW; j++) {
            $(collapse_selector[j]).collapse('hide');

        }
    }
    $(".carousel-choose-btn").click(function () {
        close_carousel()
    });
    $(".carousel-toggle-close-btn").click(function () {
        close_carousel()
    });


});
