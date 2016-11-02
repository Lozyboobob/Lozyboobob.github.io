<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <?php include ('php/rest-commom-include.php'); ?>
            <script src="js/rest-carte.js"></script>

</head>

<body onresize="resize()">
    <?php include ('php/rest-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>
            <div class="rest-content-home-page">
                <div class="rest-home-page-banner">
                    <div class="banner banner-top" id="banner-top-etablissement">
                        <div class="banner-content">
                            <p class="white lg">CARTE</p>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <p class=" sm center margin-md">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua Gerasam et repellendos conmerciorum per haec ad Gerasam cautissimas.</p>
                    <!-- menu--->
                    <div class="menu-blocks">
                        <div class="lv1-wrap menu-block">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="blue ex-md  blanc-lg form-control" value="MENU">
                                    <span class="mid-grey sm light right">Ajouter un menu<li class="ajouter-btn-lg ajouter-menu"></li></span>
                                </div>
                            </div>
                            <div class="lv2-wrap margin-md">

                                <div class="row margin-xs">
                                    <div class="col-xs-12">
                                        <span class="mid-grey sm light right">Ajouter un rubrique<li class="ajouter-btn-md ajouter-menu-rubrique"></li></span>
                                    </div>
                                </div>
                                <div class=" menu-rubrique-blocks">
                                    <div class="menu-rubrique-block">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input class="blue sm  blanc-md form-control" value="RUBRIQUE">
                                            </div>
                                        </div>
                                        <div class="menu-items">
                                            <div class="row menu-item">
                                                <div class="col-xs-4 rlt-pst">
                                                    <div class="view-btn">
                                                        <input type="checkbox" name="viewcb1" id="viewcb1">
                                                        <label for="viewcb1"></label>
                                                    </div>
                                                    <input class="blue md  blanc-md form-control " placeholder="Titre">
                                                </div>
                                                <div class="col-xs-8 no-padding-left rlt-pst">
                                                    <input class="blue md  blanc-md form-control " placeholder="Description">
                                                    <li class="del-btn"></li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv3-wrap">
                                            <div class="row">
                                                <span class="mid-grey sm light"><li class="ajouter-btn-md l ajouter-menu-item"></li>Ajouter un item</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class=" prix-cal pull-right">
                                                    <div class="prix">
                                                        <p class="sm no-margin-bottom center light">PRIX</p>
                                                        <input class="grey-frame blanc-md form-control">
                                                    </div>
                                                    €
                                                    <div class="reduc">
                                                        <p class="sm no-margin-bottom center light">RÉDUCTION</p>
                                                        <select>
                                                            <option>10%</option>
                                                        </select>
                                                    </div>
                                                    <div class="result">
                                                        <span> = 0,00€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END OF menu-->
                    <div class="rubrique-blocks">
                        <!--entree------>

                        <div class="lv1-wrap rubrique-block">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="blue ex-md  blanc-lg form-control obj-blanc" value="ENTRÉE">
                                    <span class="light sm pull-right ">12 Entrées</span>
                                    <li class="drag-down"></li>
                                </div>
                            </div>
                            <div class="collapse">
                                <div class="row">
                                    <div class="col-xs-12"><span class="mid-grey sm light right">Ajouter un entrée<li class="ajouter-btn-lg ajouter-rubrique-item"></li></span></div>
                                </div>
                                <div class="lv2-wrap margin-md rubrique-items">
                                    <div class="row rubrique-item">
                                        <div class="col-xs-4 rlt-pst">
                                            <div class="view-btn">
                                                <input type="checkbox" name="viewcb2" id="viewcb2">
                                                <label for="viewcb2"></label>
                                            </div>
                                            <input class="blue md  blanc-md form-control " placeholder="Titre">
                                        </div>
                                        <div class="col-xs-8 no-padding-left rlt-pst">
                                            <input class="blue md  blanc-md form-control " placeholder="Description">
                                            <li class="del-btn"></li>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class=" prix-cal ">
                                                        <div class="prix">
                                                            <p class="sm no-margin-bottom center light">PRIX</p>
                                                            <input class="grey-frame blanc-md form-control">
                                                        </div>
                                                        €
                                                        <div class="reduc">
                                                            <p class="sm no-margin-bottom center light">RÉDUCTION</p>
                                                            <select>
                                                                <option>10%</option>
                                                            </select>
                                                        </div>
                                                        <div class="result">
                                                            <span> = 0,00€</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END OF  L Lentree------>
                        <!-- plats-->
                        <div class="lv1-wrap rubrique-block">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="blue ex-md  blanc-lg form-control obj-blanc" value="PLATS">
                                    <span class="light sm pull-right ">12 Repas</span>
                                    <li class="drag-down"></li>

                                </div>
                            </div>
                            <div class="collapse">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span class="mid-grey sm light right">Ajouter un repas<li class="ajouter-btn-lg ajouter-rubrique-item"></li></span>
                                    </div>
                                </div>
                                <div class="lv2-wrap margin-md rubrique-items">
                                    <div class="row rubrique-item">
                                        <div class="col-xs-4 rlt-pst">
                                            <div class="view-btn">
                                                <input type="checkbox" name="viewcb" id="viewcb">
                                                <label for="viewcb"></label>
                                            </div>
                                            <input class="blue md  blanc-md form-control " placeholder="Titre">
                                        </div>
                                        <div class="col-xs-8 no-padding-left rlt-pst">
                                            <input class="blue md  blanc-md form-control " placeholder="Description">
                                            <li class="del-btn"></li>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class=" prix-cal ">
                                                        <div class="prix">
                                                            <p class="sm no-margin-bottom center light">PRIX</p>
                                                            <input class="grey-frame blanc-md form-control">
                                                        </div>
                                                        €
                                                        <div class="reduc">
                                                            <p class="sm no-margin-bottom center light">RÉDUCTION</p>
                                                            <select>
                                                                <option>10%</option>
                                                            </select>
                                                        </div>
                                                        <div class="result">
                                                            <span> = 0,00€</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--desserts-->
                        <div class="lv1-wrap rubrique-block">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="blue ex-md  blanc-lg form-control obj-blanc" value="DESSERTS">
                                    <span class="light sm pull-right ">12 Desserts</span>
                                    <li class="drag-down"></li>

                                </div>
                            </div>
                            <div class="collapse">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span class="mid-grey sm light right">Ajouter un dessert<li class="ajouter-btn-lg ajouter-rubrique-item"></li></span>
                                    </div>
                                </div>
                                <div class="lv2-wrap margin-md rubrique-items">
                                    <div class="row rubrique-item">
                                        <div class="col-xs-4 rlt-pst">
                                            <div class="view-btn">
                                                <input type="checkbox" name="viewcb" id="viewcb">
                                                <label for="viewcb"></label>
                                            </div>
                                            <input class="blue md  blanc-md form-control " placeholder="Titre">
                                        </div>
                                        <div class="col-xs-8 no-padding-left rlt-pst">
                                            <input class="blue md  blanc-md form-control " placeholder="Description">
                                            <li class="del-btn"></li>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class=" prix-cal ">
                                                        <div class="prix">
                                                            <p class="sm no-margin-bottom center light">PRIX</p>
                                                            <input class="grey-frame blanc-md form-control">
                                                        </div>
                                                        €
                                                        <div class="reduc">
                                                            <p class="sm no-margin-bottom center light">RÉDUCTION</p>
                                                            <select>
                                                                <option>10%</option>
                                                            </select>
                                                        </div>
                                                        <div class="result">
                                                            <span> = 0,00€</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END OF desserts-->
                    </div>
                    <div class="lv1-wrap">
                        <div class="row ajouter-rubrique">
                            <div class="col-xs-12">
                                <p class="blue ex-md  blanc-lg form-control obj-blanc">AJOUTER UNE RUBRIQUE
                                </p>
                                <li class="l ajouter-btn-md" style="position:absolute;    top: 11px;"></li>
                            </div>
                        </div>
                        <div class="margin-top-lg margin-bottom-md">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="pull-right">
                                        <button type="button" class="btn dark-grey-bkg">APERÇU</button>
                                        <button type="button" class="btn blue-bkg" id="carte-save-btn">ENREGISTRER</button>
                                        <button type="button" class="btn blue-bkg" id="carte-publier-btn">PUBLIER</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include ('php/footer.php'); ?>
</body>

</html>
