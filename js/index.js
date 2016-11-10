function resize() {
    // to fit info-block to the window size
    var winH = $(window).height();
    var footerH = $("#footer-accp").outerHeight(true) + $(".footer").outerHeight(true);
    var headerH = $(".psnweb-header").outerHeight(true);
    var infoFrameH = winH - headerH;
    $("#psnweb-info-frame").css("min-height", winH);
    $("#psnweb-info-frame").css("padding-top", headerH);
    //to fit the personal photosize
    var infoH = $(".psnweb-info-content").outerHeight(true);
    var psnphotoH = infoFrameH - infoH - 40 - 50; //40 is the margin of info frame content
    $(".psnweb-my-photo").css("height", psnphotoH);
}
$(document).ready(function () {
    resize();
    //scroll function for header
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".psnweb-header").css("position", "fixed");
            $(".psnweb-header").css("transform", "translateY(-75px)"); //logo 50+ padding 20 + logo maring 5
        
            //for logo transform
           
            //$(".psnweb-header .logo").css("position","absolute");
          /*  $(".psnweb-header .logo").css("transform", "translate(15px,8px)"); $(".psnweb-header .logo").removeClass("center-block");
            $(".psnweb-header .logo").css("height", "34px");*/
        }
        else {
            $(".psnweb-header").css("transform", "translateY(0px)");
        }
    });
    //href
    /*$("#toPortfolio").click() {
        var name = "collecteat";
        $(this).attr("href", "portfolios.html?name=" + name);
        alert('hi');
    }*/
});