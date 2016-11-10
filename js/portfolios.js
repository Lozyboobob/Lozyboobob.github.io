/*---------------toggle-left-------*/
function hideToggle() {
    if ($(window).width() < 992) {
        $('.toggle-left').animate({
            'left': '-250px'
        }, 'slow', function () {
            $('.toggle-left').hide();
        });
    }
    $('.toggle-show-left').animate({
        'left': '0px'
    }, 'slow', function () {});
    $('.toggle-right-content').animate({
        'left': '0px'
    }, 'slow');
}

function showToggle() {
    $('.toggle-left').show();
    $('.toggle-left').animate({
        'left': '0px'
    }, 'slow');
    $('.toggle-show-left').animate({
        'left': '250px'
    }, 'slow');
    $('.toggle-right-content').animate({
        'left': '250px'
    }, 'slow');
}

function resize() {
    if ($(window).width() >= 992) {
        if ($('.toggle-left').is(':visible')) {
            hideToggle();
        }
        $('.toggle-left').css("display", "block");
    }
    else {}
}
/*-------------------END of ajax----*/
$(document).ready(function () {
    $(".toggle-show-left").click(function () {
        if ($(window).width() < 992) {
            if ($('.toggle-left').is(':visible')) {
                hideToggle();
            }
            else {
                showToggle();
            }
        }
    })
    $(".toggle-right-content").click(function (event) {
            if ($(window).width() < 992) {
                event.stopPropagation();
                hideToggle();
            }
        })
        //for the picture slider
    var owl = $(".owl-demo")
        , picN = 0
        , textholder, booleanValue = false;
    owl.owlCarousel({
        items: 6, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0
        itemsMobile: true // itemsMobile disabled - inherit from itemsTablet option
    });
    $(".next").click(function () {
        owl.trigger('owl.next');
    })
    $(".prev").click(function () {
        owl.trigger('owl.prev');
    })
    $(".play").click(function () {
        owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    })
    $(".stop").click(function () {
        owl.trigger('owl.stop');
    })

    function addPic(content) {
        picN += 1;
        owl.data('owlCarousel').addItem(content);
    }

    function removePic() {
        picN -= 1;
        if (picN <= 0) picN = 0;
        owl.data('owlCarousel').removeItem();
    }

    function distroySlider() {
        owl.data('owlCarousel').destroy();
    }
    /*-----------------ajax----------*/
    function loadJson() {
        var jqxhr = $.getJSON("json/portJson.json", function (json) {
            var port = json.port;
            var hash = window.location.hash;
            hash = hash.split('#')[1];
            switch (hash) {
            case "pliizz":
                {
                    port = port[0];
                    break;
                }
            case "collecteat":
                {
                    port = port[2];
                    break;
                }
            case "topclass":
                {
                    port = port[1];
                    break;
                }
            case "moncapital":
                {
                    port = port[3];
                    break;
                }
            case "my3d":
                {
                    port = port[4];
                    break;
                }
            case "clotheson":
                {
                    port = port[5];
                    break;
                }
            case "minius":
                {
                    port = port[6];
                    break;
                }
            case "meishike":
                {
                    port = port[7];
                    break;
                }
            default:
                port = port[0];
            }
            //get title
            $(".psnweb-title").text(port.name);
            var introTxt;
            while (picN > 0) {
                removePic();
            }
            if (port.download == "yes") {
                var href = port.downloadurl;
                $(".need-download").css("display", "block");
                $(".need-download a").attr("href", href);
                introTxt = "";
                $('.customNavigation').css("display", "none");
                 $('.not-publish').css("display", "none");
            }
            else {
                $(".need-download").css("display", "none");
                
                if (port.publish == "yes") {
                    //for img slider
                    //get img
                    for (var i = 0; i < port.img.length; i++) {
                        var html = '<div class="item"><img src=' + port.img[i] + ' ' + 'width="100%"></div>';
                        addPic(html);
                    }
                    //for website
                    if (hash == "collecteat") {
                        console.log("reinit");
                        owl.data('owlCarousel').reinit({
                            items: 2, //10 items above 1000px browser width
                            itemsDesktop: [1000, 1], //5 items between 1000px and 901px
                            itemsDesktopSmall: [900, 1], // betweem 900px and 601px
                            itemsTablet: [600, 1], //2 items between 600 and 0
                            itemsMobile: true // itemsMobile disabled - inherit from itemsTablet option
                        });
                    }
                    else {
                        //for mobile app
                        owl.data('owlCarousel').reinit({
                            items: 6, //10 items above 1000px browser width
                            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                            itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                            itemsTablet: [600, 2], //2 items between 600 and 0
                            itemsMobile: true // itemsMobile disabled - inherit from itemsTablet option
                        });
                    }
                    //get intro
                    introTxt = "<span class='blue'>" + port.name + "</span>" + port.description;
                    $('.not-publish').css("display", "none");
                    $('.customNavigation').css("display", "block");
                }
                else {
                    introTxt = "";
                    $('.not-publish').css("display", "block");
                    $('.customNavigation').css("display", "none");
                }
            }
            //set intro
            $('.port-intro').html(introTxt);
            //get labels
            $('.port-labels').empty(); //clear label before add
            var typeHtml = '<span class="label round-label green sm" >' + port.type + '</span>';
            $('.port-labels').append(typeHtml);
            for (var i = 0; i < port.work.length; i++) {
                var workHtml = '<span class="label round-label blue sm" >' + port.work[i] + '</span>';
                $('.port-labels').append(workHtml);
            }
            for (var i = 0; i < port.tech.length; i++) {
                var workHtml = '<span class="label round-label grey sm" >' + port.tech[i] + '</span>';
                $('.port-labels').append(workHtml);
            }
        }).error(function () {
            alert("ajax return error");
        })
    }
    loadJson();
    //the ajax link
    var links = [".toPliizz", ".toCollecteat", ".toMoncapital", ".toTopclass", ".toMy3d", ".toMinius", ".toClotheson", ".toMeishike", ];

    function resetAll() {
        for (var i = 0; i < links.length; i++) {
            if ($(links[i]).hasClass("active")) {
                $(links[i]).removeClass("active");
            }
        }
        loadJson();
    }
    $('.toPliizz').click(function () {
        resetAll();
        $('.toPliizz').addClass("active");
    });
    $('.toCollecteat').click(function () {
        resetAll();
        $('.toCollecteat').addClass("active");
    });
    $('.toMoncapital').click(function () {
        resetAll();
        $('.toMoncapital').addClass("active");
    });
    $('.toTopclass').click(function () {
        resetAll();
        $('.toTopclass').addClass("active");
    });
    $('.toMy3d').click(function () {
        resetAll();
        $('.toMy3d').addClass("active");
    });
    $('.toMinius').click(function () {
        resetAll();
        $('.toMinius').addClass("active");
    });
    $('.toClotheson').click(function () {
        resetAll();
        $('.toClotheson').addClass("active");
    });
    $('.toMeishike').click(function () {
        resetAll();
        $('.toMeishike').addClass("active");
    });
})