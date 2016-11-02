$(document).ready(function () {
    //name the checkbox for view
    var cbN = $("input[type=\"checkbox\"] + label").length;

    function initCb() {
        $("input[type=\"checkbox\"] ").each(function (index) {
            $(this).attr("name", "viewcb" + index);
            $(this).attr("id", "viewcb" + index);
            $(this).siblings().attr("for", "viewcb" + index);
        })
    }

    function addCb(ele) {
        if (cbN < 100) {
            $("input[type=\"checkbox\"] ", ele).attr("name", "viewcb" + cbN);
            $("input[type=\"checkbox\"] ", ele).attr("id", "viewcb" + cbN);
            $("input[type=\"checkbox\"] ", ele).siblings().attr("for", "viewcb" + cbN);
            cbN++;
        } else {
            initCb();
        }
    }
    initCb();

    //add menu
    function addMenu() {
        $(".menu-blocks").append('<div class="lv1-wrap menu-block"> <div class="row"> <div class="col-xs-12"> <input class="blue ex-md  blanc-lg form-control" value="MENU">  <span class="mid-grey sm light right">Ajouter un menu<li class="ajouter-btn-lg ajouter-menu"></li></span></div>  </div> <div class="lv2-wrap margin-md"><div class="row margin-xs"> <div class="col-xs-12"> <span class="mid-grey sm light right">Ajouter un rubrique<li class="ajouter-btn-md ajouter-menu-rubrique"></li></span></div> </div><div class=" menu-rubrique-blocks"> <div class="menu-rubrique-block"> <div class="row"> <div class="col-xs-12"> <input class="blue sm  blanc-md form-control" value="RUBRIQUE"></div> </div> <div class="menu-items"> <div class="row menu-item">  <div class="col-xs-4 rlt-pst"><div class="view-btn"><input type="checkbox" name="viewcb1" id="viewcb1">  <label for="viewcb1"></label></div> <input class="blue md  blanc-md form-control " placeholder="Titre">  </div><div class="col-xs-8 no-padding-left rlt-pst"><input class="blue md  blanc-md form-control " placeholder="Description"><li class="del-btn"></li>  </div> </div>   </div><div class="lv3-wrap"> <div class="row"> <span class="mid-grey sm light"><li class="ajouter-btn-md l ajouter-menu-item"></li>Ajouter un item</span> </div></div> <div class="row"> <div class="col-xs-12"> <div class=" prix-cal pull-right"><div class="prix"><p class="sm no-margin-bottom center light">PRIX</p>  <input class="grey-frame blanc-md form-control"> </div> €<div class="reduc">  <p class="sm no-margin-bottom center light">RÉDUCTION</p> <select><option>10%</option></select> </div>  <div class="result"> <span> = 0,00€</span> </div> </div></div> </div> </div> </div> </div> </div> ');
    }

    function addMenuRubrique(parent) {
        $(".menu-rubrique-blocks", parent).append(' <div class="menu-rubrique-block"> <div class="row"> <div class="col-xs-12"> <input class="blue sm  blanc-md form-control" value="RUBRIQUE"></div> </div> <div class="menu-items"> <div class="row menu-item">  <div class="col-xs-4 rlt-pst"><div class="view-btn"><input type="checkbox" name="viewcb1" id="viewcb1">  <label for="viewcb1"></label></div> <input class="blue md  blanc-md form-control " placeholder="Titre">  </div><div class="col-xs-8 no-padding-left rlt-pst"><input class="blue md  blanc-md form-control " placeholder="Description"><li class="del-btn"></li>  </div> </div>   </div><div class="lv3-wrap"> <div class="row"> <span class="mid-grey sm light"><li class="ajouter-btn-md l ajouter-menu-item"></li>Ajouter un item</span> </div></div> <div class="row"> <div class="col-xs-12"> <div class=" prix-cal pull-right"><div class="prix"><p class="sm no-margin-bottom center light">PRIX</p>  <input class="grey-frame blanc-md form-control"> </div> €<div class="reduc">  <p class="sm no-margin-bottom center light">RÉDUCTION</p> <select><option>10%</option></select> </div>  <div class="result"> <span> = 0,00€</span> </div> </div></div> </div> </div>  ');
    }

    function addMenuItem(parent) {
        $(".menu-items", parent).append('<div class="row menu-item"> <div class="col-xs-4 rlt-pst"><div class="view-btn"><input type="checkbox" name="viewcb1" id="viewcb1">  <label for="viewcb1"></label></div><input class="blue md  blanc-md form-control " placeholder="Titre"> </div>  <div class="col-xs-8 no-padding-left rlt-pst"> <input class="blue md  blanc-md form-control " placeholder="Description"><li class="del-btn"></li></div></div>');
        //refit the cb
        addCb($(".menu-item:last-child", parent));

    }

    function delItem(ele) {
        ele.remove();
    }
    $(document).on('click', ".ajouter-menu", function () {
        addMenu();
    });
    $(document).on('click', ".ajouter-menu-rubrique", function () {
        addMenuRubrique($(this).parents(".lv2-wrap"));
    });
    $(document).on('click', ".ajouter-menu-item", function () {
        addMenuItem($(this).parents(".menu-rubrique-block"));
    });
    $(document).on('click', ".del-btn", function () {
        delItem($(this).parents(" .menu-item"));
    });


    //add entree plats dessert
    function addRubrique() {
        $(".rubrique-blocks").append(' <div class="lv1-wrap rubrique-block"> <div class="row"><div class="col-xs-12"> <input class="blue ex-md  blanc-lg form-control obj-blanc"><span class="light sm pull-right "></span><li class="drag-down"></li></div> </div> <div class="collapse"><div class="row"> <div class="col-xs-12"><span class="mid-grey sm light right">Ajouter un dessert<li class="ajouter-btn-lg ajouter-rubrique-item"></li></span></div></div><div class="lv2-wrap margin-md rubrique-items"><div class="row rubrique-item"> <div class="col-xs-4 rlt-pst"><div class="view-btn"> <input type="checkbox" name="viewcb2" id="viewcb2">  <label for="viewcb2"></label> </div> <input class="blue md  blanc-md form-control " placeholder="Titre"> </div>  <div class="col-xs-8 no-padding-left rlt-pst"><input class="blue md  blanc-md form-control " placeholder="Description"><li class="del-btn"></li><div class="row">  <div class="col-xs-12">  <div class=" prix-cal "> <div class="prix"><p class="sm no-margin-bottom center light">PRIX</p><input class="grey-frame blanc-md form-control"></div>€<div class="reduc">  <p class="sm no-margin-bottom center light">RÉDUCTION</p><select><option>10%</option></select> </div><div class="result">  <span> = 0,00€</span> </div>  </div>  </div> </div> </div> </div> </div> </div></div>');
    }

    function addRubriqueItem(parent) {
        $(".rubrique-items", parent).append('<div class="row rubrique-item"> <div class="col-xs-4 rlt-pst"><div class="view-btn"> <input type="checkbox" name="viewcb2" id="viewcb2">  <label for="viewcb2"></label> </div> <input class="blue md  blanc-md form-control " placeholder="Titre"> </div>  <div class="col-xs-8 no-padding-left rlt-pst"><input class="blue md  blanc-md form-control " placeholder="Description"><li class="del-btn"></li><div class="row">  <div class="col-xs-12">  <div class=" prix-cal "> <div class="prix"><p class="sm no-margin-bottom center light">PRIX</p><input class="grey-frame blanc-md form-control"></div>€<div class="reduc">  <p class="sm no-margin-bottom center light">RÉDUCTION</p><select><option>10%</option></select> </div><div class="result">  <span> = 0,00€</span> </div>  </div>  </div> </div> </div> </div> ');
        //refit the cb
        addCb($(".rubrique-item:last-child", parent));
    }

    $(document).on('click', ".ajouter-rubrique", function () {
        addRubrique();
    });
    $(document).on('click', ".ajouter-rubrique-item", function () {
        addRubriqueItem($(this).parents(".lv1-wrap"));
    });
    $(document).on('click', ".del-btn", function () {
        delItem($(this).parents(" .rubrique-item"));
    });

    //setting of collapse
    function toggleCollapse(parent) {
        var toggled=$(".collapse", parent).hasClass("toggled");
        if(toggled){
            $(".collapse", parent).removeClass("toggled");
        }
        else{
            $(".collapse", parent).addClass("toggled");
        }
        toggled=!toggled;
        $(".collapse", parent).collapse('toggle');
        $(".collapse", parent).addClass("toggled");
        var deg = toggled? 180 : 0;
        console.log($(".drag-down", parent));
        $(".drag-down", parent).css('-webkit-transform', 'rotate(' + deg + 'deg)');
        $(".drag-down", parent).css('-moz-transform', 'rotate(' + deg + 'deg)');
        $(".drag-down", parent).css('transform', 'rotate(' + deg + 'deg)'); 
      
    }
    $(document).on('click', ".drag-down", function () {
        toggleCollapse($(this).parents(" .rubrique-block"));
    });
    
    //
    $("#carte-save-btn, #carte-publier-btn").click(function(){
        location.href="rest-plat-liste.php";
    })

});
