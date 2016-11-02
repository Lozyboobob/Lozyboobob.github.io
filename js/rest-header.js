
function resize() {
    // to fit the window
    var winH = $(window).height();

    var footerH = $("#footer-accp").outerHeight(true) + $(".footer").outerHeight(true);
    var headerH=$(".rest-header").outerHeight(true);
    $(".rest-content-home-page").css("min-height", winH - footerH);
}
function connectOperate(){
    if (window.IS_LOGIN) {
        $(".connection-btn").css("display", "none");
        $(".nav-btn").css("display", "inline-block");
    }
    else{
        $(".connection-btn").css("display", "inline-block");
        $(".nav-btn").css("display", "none");
    }
}
$(document).ready(function () {
    connectOperate();
    //connection operation
    $(".modal-connexion-btn").click(function(){
        window.IS_LOGIN=true;
         connectOperate();
        $("#connection-diag").modal('hide');
    });
    $("#deconnec-btn").click(function(){
        window.IS_LOGIN=false;
        connectOperate();
    })
    $(".rest-header .logo").click(function(){
        location.href="rest-home.php";
    })
    resize();

});
