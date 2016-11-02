<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <?php include ('php/rest-commom-include.php'); ?>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="js/rest-data.js"></script>
    <style type="text/css">

</style>

</head>

<body onresize="resize()">
    <?php include ('php/rest-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>

            <div class="rest-content-home-page">
                <div class="rest-home-page-banner">
                    <div class="banner banner-top" id="banner-top-etablissement">
                        <div class="banner-content">
                            <p class="white lg">DATA
                                <br> CHEZ MICHEL</p>
                        </div>
                    </div>
                </div>
               
                <div class="container">
                    <div class="light-grey row margin-lg display-flex hidden-xs" style="min-height:80px">
                        <div class="col-sm-8 ">
                            <div class="row display-flex" style="min-height:80px">
                                <div class="col-xs-6">
                                    <div class="ver-center" style="position:absolute;">
                                        <p class="blue center no-margin-bottom">RAPPORT DÉTAILLÉ</p>
                                        <p class="xs center light">(plage minimum : 1 jour / plage maximum 1 an)</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 " style="position:relative;min-height:100%">
                                    <div class="ver-center" style="position:absolute;">
                                        <div class="margin-bottom-xs rapport-date">
                                            <label class="sm">du:</label>
                                            <input type="text">
                                        </div>
                                        <div class="margin-bottom-xs  rapport-date">
                                            <label class="sm ">au:</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 " style="position:relative;min-height:100%">
                            <button type="button" class="btn blue-bkg  edit-rapport-btn ver-center" style="position:absolute;">ÉDITER LE RAPPORT</button>
                        </div>
                    </div>

                    <div class="light-grey row visible-xs-block rapport-block">
                        <div class="col-sm-8 ">
                            <div class="row ">
                                <div class="col-xs-7">
                                    <div>
                                        <p class="blue center no-margin-bottom">RAPPORT DÉTAILLÉ</p>
                                        <p class="xs center light">(plage minimum : 1 jour / plage maximum 1 an)</p>
                                    </div>
                                </div>
                                <div class="col-xs-5 ">
                                    <div>
                                        <div class="rapport-date">
                                            <label class="sm">du:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class=" rapport-date">
                                            <label class="sm ">au:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 margin-top-sm">
                            <button type="button" class="btn blue-bkg center-block edit-rapport-btn">ÉDITER LE RAPPORT</button>
                        </div>
                    </div>

                    <div class="row  margin-lg">
                        <div class="col-xs-8">
                            <p class="ex-md blue regular">CHIFFRE D’AFFAIRES DU MOIS EN COURS</p>
                        </div>
                        <div class="col-xs-4">
                            <div style="float:right">
                                <button type="button" class="btn grey-frame blue ex-md" id="chiffre-en-cours">3000</button> <span class="ex-md ">€ HT</span>
                            </div>
                        </div>
                    </div>
                    <div class="row  margin-lg">
                        <div class="col-xs-8">
                            <p>CHIFFRE D’AFFAIRES DU MOIS PRÉCÉDENT</p>
                        </div>
                        <div class="col-xs-4">
                            <div style="float:right">
                                <button type="button" class="btn grey-frame sm" id="chiffre-precedent">3000</button> <span class="sm light">€ HT</span>
                            </div>
                        </div>
                    </div>
                    
                    <div id="container" style=" height: 400px; margin: 0 auto"></div>
                    <div class="container-wrap">
                        <div class="hor-line xs center-block margin-lg"></div>
                        <div class="row">
                            <div class="col-xs-6" style="border-right:1px solid #c7c7c7">
                                <p class="blue center ex-md no-margin-bottom regular">MEILLEURS VENTES</p>
                                <p class=" center sm light ">(depuis l’inscription sur Collect’eat)</p>
                                <p class="center margin-md"><span class="blue">1. </span>Plat 1</p>
                                <p class="center margin-md"><span class="blue">2. </span>Plat 2</p>
                                <p class="center margin-md"><span class="blue">3. </span>Plat 3</p>
                                <p class="center margin-md"><span class="blue">4. </span>Plat 4</p>
                                <p class="center margin-md"><span class="blue">5. </span>Plat 5</p>
                            </div>
                            <div class="col-xs-6">
                                <p class="blue center ex-md no-margin-bottom regular">MEILLEURS CLIENTS</p>
                                <p class=" center sm light ">(depuis l’inscription sur Collect’eat)</p>
                                <p class="center margin-md"><span class="blue">1. </span>Plat 1</p>
                                <p class="center margin-md"><span class="blue">2. </span>Plat 2</p>
                                <p class="center margin-md"><span class="blue">3. </span>Plat 3</p>
                                <p class="center margin-md"><span class="blue">4. </span>Plat 4</p>
                                <p class="center margin-md"><span class="blue">5. </span>Plat 5</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include ('php/footer.php'); ?>
</body>

</html>
