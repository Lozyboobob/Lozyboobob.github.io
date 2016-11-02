<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>



        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUYZhnCx0WYCDG9spWxX26ALy30un5ABQ" async defer></script>
        <link rel="stylesheet" href="owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css">
        <script src="owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
        <script src="js/client-map.js"></script>
        <script src="js/client-find-rest.js"></script>

</head>

<body>
    <?php include ('php/client-header.php'); ?>
        <div class="content" style="position:relative;">
            <div class="info-banner">
                <div class="banner-title ver-center">
                    <p class="center no-margin-bottom">NEWS FEED</p>
                </div>
                <div class="owl-carousel">
                    <div>
                        <div class="row">
                            <div class="col-xs-3">
                                <p class="center"> -</p>
                            </div>
                            <div class="col-xs-9">
                                <p class="center news-content">récurrence commande</p>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-3">
                                <p class="center"> -</p>
                            </div>
                            <div class="col-xs-9">
                                <p class="center  news-content">plat du jour </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-3">
                                <p class="center">-</p>
                            </div>
                            <div class="col-xs-9">
                                <p class="center  news-content">nouveauté</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-3">
                                <p class="center">-</p>
                            </div>
                            <div class="col-xs-9">
                                <p class="center  news-content">promotions</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-3">
                                <p class="center">-</p>
                            </div>
                            <div class="col-xs-9">
                                <p class="center  news-content">news</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="promotion-diag">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color:#78D1F2;">
                        <div class="">
                        <p class="center white">CHEZ MICHEL</p>
                        <img src="images/gastronomi-rogede-sild-born.jpg" width="50%" class="margin-bottom-sm center-block">
                        <p class="sm light center">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua Gerasam et repellendos conmerciorum per haec ad Gerasam cautissimas.</p>
                        <button type="button" class="btn white-bkg center-block">VOIR</button>
                    </div>
                    </div>
                </div>
            </div>
             <div id="sub-content">
                    <div class="">
                        <p class="center white">CHEZ MICHEL</p>
                        <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="margin-bottom-sm">
                        <p class="sm light center">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua Gerasam et repellendos conmerciorum per haec ad Gerasam cautissimas.</p>
                        <button type="button" class="btn white-bkg center-block">VOIR</button>
                    </div>
                </div>
            <div class="container">
                <div class="info-setting row">
                    <p class="margin-md">50 RUE DU CHÂTEAU LANDON</p>
                    <p>Heure de retrait</p>
                    <button class="btn center-block grey-frame">00h00</button>
                    <button class="btn dark-grey-bkg center-block" id="modify-info-btn"> MODIFIER</button>
                </div>
                <div class="map-block row">
                    <div class="col-xs-12">
                        <div class="filtre-search ">
                            <div class="filtre dropdown">
                                <button type="button" class="btn grey-frame" id="filtre-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">filtre </button>
                                <ul class="dropdown-menu" aria-labelledby="filtre-menu">

                                    <p class="title ex-md light no-margin-bottom">BUDGET</p>
                                    <div class="" style="text-align:center" id="budget-selector">
                                        <button type="button" class="btn grey-frame ">€</button>
                                        <button type="button" class="btn grey-frame mask-full">€€</button>
                                        <button type="button" class="btn grey-frame ">€€€</button>
                                    </div>
                                    <p class="title ex-md light no-margin-bottom">CUISINE</p>
                                    <div id="cuisine-selector" style="text-align:center">
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent ">Italien</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Chinois</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Français</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Japonais</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Libanais</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Mexicain</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Espagnol</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Américain</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>

                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Russe</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Africain</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Indien</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent sm-padding">Thailandais</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent sm-padding">Indonésien</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Sandwich</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Salade</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Bio</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent sm sm-padding">Méditéranéen</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Halal</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Petit-dej</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent sm-padding">Cofee shop</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Bar à jus</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Pâtisserie</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Vegan</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>
                                        </div>
                                        <div class="cuisine-item">
                                            <button type="button" class="btn grey-frame mask-transparent">Casher</button>
                                            <button type="button" class="btn mask "><span class="white bold ex-md cuisine-n"></span></button>

                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="search">
                                <input type="text" class="form-control">
                                <button type="button" class="btn blue-bkg"></button>
                            </div>
                        </div>
                        <div id="map" class="margin-sm"></div>
                    </div>
                </div>
                <div class="menus-block">
                    <div class="row">
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>
                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>
                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>
                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block disable">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>

                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block disable">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>

                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 col-xs-6 ">
                            <div class="menu-block disable">
                                <div class="img-field">
                                </div>
                                <div class="disable-mask">
                                    <div class="mask"></div>
                                    <div class="txt whole-center">
                                        <p class="center no-margin-bottom bold">DISPONIBLE EN PRÉCOMMANDE </p>
                                        <p class="center sm light">(16h)</p>
                                    </div>

                                </div>

                                <p class="center blue no-margin-bottom">RESTAURANT</p>
                                <p class="center italy light sm">Italien</p>
                                <div class="address">
                                    <div>
                                        <li class="pointer"></li>
                                        <span class="add sm">108 rue amelot 75011</span>
                                    </div>
                                </div>
                                <div class="time">
                                    <li class="img"></li><span class="text sm">6min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php include ('php/client-bottom-banner.php'); ?>
               
        </div>
        <?php include ('php/footer.php'); ?>
</body>

</html>
