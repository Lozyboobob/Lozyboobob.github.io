<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <?php include ('php/rest-commom-include.php'); ?>
            <script src="js/rest-mon-etablissement.js"></script>

</head>

<body>
    <?php include ('php/rest-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>

            <div class="rest-content-home-page">
                <div class="rest-home-page-banner">
                    <div class="banner banner-top" id="banner-top-etablissement">
                        <div class="banner-content">
                            <p class="white lg">MON ÉTABLISSEMENT</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form class="margin-md">
                        <div class="row">
                            <div class="col-sm-6">
                                <!--informarion etablissement-->
                                <p class="title ex-md light">INFORMATIONS ÉTABLISSEMENT</p>
                                <label>Nom de l’établissement</label>
                                <br>
                                <input type="text" class="form-control margin-bottom-sm blue">
                                <label>Adresse de l’établissement</label>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="N°">
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="Voie/rue/avenue">
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="Voie/rue/avenue">
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="N°">
                                    </div>
                                    <div class="col-xs-9 no-padding-left">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="N°">
                                    </div>
                                </div>
                                <label>Description de l’établissement</label>
                                <p class="sm light">(Cette description sera visible par vos clients)</p>
                                <textarea rows="7"></textarea>
                                <button type="button" class="btn blue-bkg center-block margin-md">ENRGISTRER</button>
                                <div class="hor-line xs"></div>
                                <!--END informarion etablissement-->
                                <!-- informarion mot de pass-->
                                <p class="title ex-md light">MOT DE PASSE</p>
                                <label>Mot de passe actuel</label>
                                <br>
                                <input type="password" class="form-control margin-bottom-sm blue">
                                <button type="button" class="btn blue-bkg center-block margin-md"> MODIFIE</button>
                            </div>
                            <div class="col-sm-6">
                                <!--informarion personnelles-->
                                <p class="title ex-md light">INFORMATIONS ÉTABLISSEMENT</p>
                                <label>Prénom & nom de responsable*</label>
                                <br>
                                <input type="text" class="form-control margin-bottom-sm blue">
                                <label>E-mail</label>
                                <br>
                                <input type="text" class="form-control margin-bottom-sm ">
                                <label>Téléphone fixe <span class="sm light">(facultatif)</span></label>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="+ 33 (0) 6">
                                    </div>
                                </div>
                                <label>Téléphone mobile</label>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control margin-bottom-sm " placeholder="+ 33 (0) 6">
                                    </div>
                                </div>
                                <p class="sm light">(les coordonnées téléphoniques restent confidentielles)</p>

                                <button type="button" class="btn blue-bkg center-block margin-md"> ENRGISTRER</button>
                                <div class="hor-line xs"></div>
                                <a class="decoration blue italy toright margin-top-md sm">Tout éffacer</a>
                                <br>
                                <p class="title ex-md light no-margin-bottom">BUDGET</p>
                                <p class="sm light center ">(gamme de prix de votre établissement)</p>
                                <div class="" style="text-align:center" id="budget-selector">
                                    <button type="button" class="btn grey-frame ">€</button>
                                    <button type="button" class="btn grey-frame mask-full">€€</button>
                                    <button type="button" class="btn grey-frame ">€€€</button>
                                </div>
                                <p class="title ex-md light no-margin-bottom">CUISINE</p>
                                <p class="sm light center ">(choix multiple possible par ordre)</p>
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
                            </div>
                        </div>
                        <div class="hor-line xs margin-top-lg"></div>
                        <p class="title ex-md light no-margin-bottom">BANQUE D’IMAGE</p>
                        <p class="sm center light">(Choisir une image qui illustre le mieux votre cuisine)</p>
                        <div id="banque-de-image">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-1" id="1">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-1" id="2">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-1" id="3">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-1" id="4">
                                </div>
                            </div>
                            <div class="collapse" id="collapse-row-1">
                                <div class="carousel slide banque-de-image-carousel" data-ride="carousel" data-interval="false" id="carousel-example-generic">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox" style="height:100%">
                                        <div class="item active">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Controls -->

                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <button type="button" class="btn blue-bkg carousel-choose-btn">CHOISIR</button>
                                    <button type="button" class="btn blue-frame carousel-toggle-close-btn">X</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-2" id="5">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-2" id="6">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-2" id="7">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-2" id="8">
                                </div>
                            </div>
                            <div class="collapse" id="collapse-row-2">
                                <div class="carousel slide banque-de-image-carousel" data-ride="carousel" data-interval="false" id="carousel-example-generic-2">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="4"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="5"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="6"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="7"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="8"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="9"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="10"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="11"></li>
                                        <li data-target="#carousel-example-generic-2" data-slide-to="12"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox" style="height:100%">
                                        <div class="item active">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Controls -->

                                    <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <button type="button" class="btn blue-bkg carousel-choose-btn">CHOISIR</button>
                                    <button type="button" class="btn blue-frame carousel-toggle-close-btn">X</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-3" id="9">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-3" id="10">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-3" id="11">
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" class="toggle-image row-3" id="12">
                                </div>
                            </div>
                            <div class="collapse" id="collapse-row-3">
                                <div class="carousel slide banque-de-image-carousel" data-ride="carousel" data-interval="false" id="carousel-example-generic-3">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic-3" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="4"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="5"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="6"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="7"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="8"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="9"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="10"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="11"></li>
                                        <li data-target="#carousel-example-generic-3" data-slide-to="12"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox" style="height:100%">
                                        <div class="item active">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="..." class="center-block">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <img src="images/gastronomi-rogede-sild-born.jpg" width="100%" alt="...">
                                            <div class="carousel-caption">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Controls -->

                                    <a class="left carousel-control" href="#carousel-example-generic-3" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic-3" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <button type="button" class="btn blue-bkg carousel-choose-btn">CHOISIR</button>
                                    <button type="button" class="btn blue-frame carousel-toggle-close-btn">X</button>
                                </div>
                            </div>
                        </div>
                        <div class="hor-line xs margin-top-lg"></div>
                        <p class="title ex-md light ">HORAIRES D’OUVERTURE</p>
                        <div class="row">
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Lundi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Mardi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Mercredi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Jeudi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Vendredi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Samedi :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hour-setting col-sm-4 ">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-3">
                                        <p class="blue right">Dimanche :</p>
                                    </div>
                                    <div class="col-sm-7 col-xs-9 hour-setting-item">
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="margin-bottom-xs display-flex">
                                            <label class="sm first-setting-label">Matin</label>
                                            <input type="text" class="form-control">
                                            <label class="sm">à</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-lg">
                            <div class="col-xs-6 col-sm-4 col-sm-offset-1">
                                <img src="images/20160808_Collecteat-19.svg" width="40%" class="center-block">
                            </div>
                            <div class="col-xs-6 col-sm-offset-2 col-sm-4 ">
                                <img src="images/20160808_Collecteat-18.svg" width="40%" class="center-block">
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-xs-6">
                                <p class="title ex-md light ">JE N’AI BIENTÔT PLUS DE SACS</p>
                            </div>
                            <div class="col-xs-6">

                                <p class="title ex-md light no-margin-bottom">UNE QUESTION ?</p>
                                <p class="sm center">appelez vite le 00 00 00 00 00 ou écrivez a l’adresse : contact@collecteat.fr</p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
         <?php include ('php/footer.php'); ?>
</body>

</html>
