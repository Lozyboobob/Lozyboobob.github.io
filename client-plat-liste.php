<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUYZhnCx0WYCDG9spWxX26ALy30un5ABQ" async defer></script>
        <script src="js/client-plat-liste.js"></script>

</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="rating-diag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content container-fluid">
                <p class="center ex-md bold no-margin-bottom">PLAT 1</p>
                <p class="center">Opima habet adtributo conmerciorum</p>
                <div class="rating-field row margin-sm">
                    <div class="col-xs-2 col-xs-offset-1">
                        <input type="checkbox" checked=true id="star1" name="star1">
                        <label>
                        </label>
                    </div>
                    <div class="col-xs-2 ">
                        <input type="checkbox" checked="checked" id="star2">
                        <label>

                        </label>
                    </div>
                    <div data-ng-bind-template="" class="col-xs-2 ">
                        <input type="checkbox" checked="true" id="star3">
                        <label>

                        </label>
                    </div>
                    <div class="col-xs-2 ">
                        <input type="checkbox" checked="true" id="star4">
                        <label>

                        </label>
                    </div>
                    <div class="col-xs-2 ">
                        <input type="checkbox" checked="true" id="star5">
                        <label>

                        </label>
                    </div>
                </div>
                <p class="sm center">24 VOTES</p>
                <div class="row" style="text-align:center" class="margin-lg">
                    <div>
                        <div class="prix">
                            <span class="bold"><li class="pre-prix-mask"></li>11€</span>
                            <span class="sm blue bold">-10%</span>
                        </div>
                        <span class="bold ex-md blue">10€</span>
                    </div>
                </div>
                <div style="text-align:center" class="margin-top-lg margin-bottom-md">
                    <button type="button" class="btn blue-bkg img-btn" style="margin:5px"><img src="images/Logo_Facebook.svg" width="10">PARTAGER</button>
                    <button type="button" class="btn blue-bkg img-btn" style="margin:5px"><img src="images/Logo_twitter.svg" width="10">PARTAGER</button>
                </div>
                <span class="ajouter-btn-lg right"></span>

            </div>
        </div>
    </div>
    
    <?php include ('php/client-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>
            <div class="content">
                <div class="banner banner-top-carte-list" id="banner-top-etablissement">
                    <div class="banner-content">
                        <div class="container">
                            <img src="images/gastronomi-rogede-sild-born.jpg" class="center-block">
                            <p class="white lg">RESTAURANT</p>
                            <p class="white bold">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua Gerasam et repellendos conmerciorum per haec ad Gerasam cautissimas.</p>
                        </div>
                    </div>
                </div>
                <div class="blue liste-banner">
                    <div class="container">
                        <div class="col-sm-4 col-xs-3">
                            <p class="center white sm"><span></span>Français</p>
                        </div>
                        <div class="col-sm-4 col-xs-3">
                            <p class="center white sm"><span></span>12h - 23h</p>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <p class="center white sm"><span></span>10 rue de la paix 75010</p>
                        </div>
                    </div>
                </div>
                <div class="container " id="main-content">
                    <div class="row">
                        <div class="col-sm-3 " style="position:relative">
                            <div id="list-left-nav">
                                <div class="carte-rtn-btn">
                                    <li class="img"></li>
                                    <span class="blue">RETOUR RECHERCHE</span>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation" class="active"><a href="#plats-du-jour" id="plats-du-jour-btn">Plats du jour</a></li>
                                    <li role="presentation"><a href="#entrees" id="entrees-btn">Entrées</a></li>
                                    <li role="presentation"><a href="#plats" id="plats-btn">Plats</a></li>
                                    <li role="presentation"><a href="#desserts" id="desserts-btn">Desserts</a></li>
                                    <li role="presentation"><a href="#menus" id="menus-btn">Menus</a></li>
                                    <li role="presentation"><a href="#boissons" id="boissons-btn">Boissons</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="carte-listes">

                                <div class="carte-list" id="plats-du-jour">
                                    <p class="center ex-md margin-lg">PLATS DU JOUR</p>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carte-list" id="entrees">
                                    <p class="center ex-md margin-lg">ENTRÉES</p>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carte-list" id="plats">
                                    <p class="center ex-md margin-lg">PLATS</p>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                    <div class="plat">
                                        <div class="left-part">
                                            <p class="ex-md bold">PLAT1</p>
                                            <p class=" light">Opima habet adtributo conmerciorum</p>
                                        </div>
                                        <div class="right-part">
                                            <div class="prix">
                                                <span><li class="pre-prix-mask"></li>11€</span>
                                                <span class="sm blue">-10%</span>
                                            </div>
                                            <span class="bold ex-md blue">10€<span class="ajouter-btn-md"></span></span>
                                        </div>
                                    </div>
                                </div>
                               <!-- <div class="carte-list" id="desserts"></div>-->
                                <!--<div class="carte-list" id="menus"></div>-->
                                <!-- <div class="carte-list" id="boissons"></div> -->

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="ma-command-field margin-top-lg">
                                <p class="blue center ">MA COMMANDE</p>
                                <img src="images/20160808_Collecteat-13.svg" width="18" class="group-btn">
                                <div class="selected-items">
                                    <div class="selected-item ">
                                        <div class="left-part">
                                            <span>Plat 1</span>
                                            <li class="blue sm plus">+</li> <span class="num">1</span>
                                            <li class="blue sm minus">-</li>
                                        </div>
                                        <span class="right-part">10€</span>
                                    </div>
                                    <div class="selected-item ">
                                        <div class="left-part">
                                            <span>Plat 1</span>
                                            <li class="blue sm plus">+</li> <span class="num">1</span>
                                            <li class="blue sm minus">-</li>
                                        </div>
                                        <span class="right-part">10€</span>
                                    </div>
                                </div>
                                <br>
                                <p class="right ">TOTAL: <span class="md blue"> 20€ </span></p>
                                <div class="hor-line xs"></div>
                                <p class=" center margin-top-md">HORAIRE DE RETRAIT</p>
                                <form>
                                    <div class="row">
                                        <div class="col-md-7 ">
                                            <select class="form-control sm grey">
                                                <option>Aujourd’hui</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 no-padding-left ">
                                            <select class="form-control sm grey">
                                                <option>12h15</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control italy margin-top-md" placeholder="Code promo">
                                    <p class="center no-margin-bottom margin-top-md sm">Commentaires pour le restaurant</p>
                                    <textarea rows="5" class="form-control"></textarea>
                                    <button type="button" class="btn blue-bkg margin-md center-block">COMMANDER</button>
                                </form>

                            </div>
                            <div id="plat-list-map" class="margin-top-md"></div>
                        </div>
                    </div>
                    <div class="margin-top-lg"></div>
                </div>
            </div>

            <?php include ('php/client-bottom-banner.php'); ?>
                <?php include ('php/footer.php'); ?>
</body>

</html>
