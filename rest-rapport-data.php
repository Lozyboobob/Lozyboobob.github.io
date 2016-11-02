<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <?php include ('php/rest-commom-include.php'); ?>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="js/rest-rapport-data.js"></script>

</head>

<body onresize="resize()">
    <?php include ('php/rest-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>

            <div class="rest-content-home-page">
                <div class="rest-home-page-banner">
                    <div class="banner banner-top" id="banner-top-etablissement">
                        <div class="banner-content">
                            <p class="white lg">RAPPORT DATA</p>
                        </div>
                    </div>
                </div>
                <div class="container " style="position:relative">
                    <div class="frame-wrap  margin-md">
                        <div class="border-grey">
                            <div class="container-fluid">
                                <div class="row center-ancestor hidden-xs">
                                    <div class="col-xs-4 center-parent">
                                        <div class="ver-center">
                                            <p>CHEZ MICHEL</p>
                                            <p class="sm">108 rue amelot 75011 Paris</p>
                                        </div>

                                    </div>
                                    <div class="col-xs-4">
                                        <img src="images/Logo-02.svg" class="logo-img center-block">
                                    </div>
                                    <div class="col-xs-4 center-parent">
                                        <div class="ver-center" style="right:15px">
                                            <p class="right light sm">DATE D’ÉDITION</p>
                                            <p class="sm right blue">JJ/MM/AAA</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  visible-xs" style="padding-top:10px">
                                    <div class="col-xs-4 ">
                                        <div class="">
                                            <p>CHEZ MICHEL</p>
                                            <p class="sm">108 rue amelot 75011 Paris</p>
                                        </div>

                                    </div>
                                    <div class="col-xs-4">
                                        <img src="images/Logo-02.svg" class="logo-img center-block">
                                    </div>
                                    <div class="col-xs-4 ">
                                        <div class="" style="right:15px">
                                            <p class="right light sm">DATE D’ÉDITION</p>
                                            <p class="sm right blue">JJ/MM/AAA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hor-line xs center-block margin-md"></div>
                                <p class=" blue ex-md regular">CHIFFRE D’AFFAIRES <span class="dark-grey"> (du ...... au ....... )</span> </p>
                                <table class="chiffre-table margin-top-md margin-bottom-lg">
                                    <tbody>
                                        <tr>
                                            <th>DATE</th>
                                            <th>NOMBRE DE COMMANDES REFUSÉES</th>
                                            <th>MONTANT DES COMMANDES REFUSÉES</th>
                                            <th>NOMBRE DE COMMANDES ACCÉPTÉES</th>
                                            <th>CHIFFRE D’AFFAIRE DES COMMANDES REFUSÉES</th>
                                        </tr>
                                        <tr>
                                            <td>JJ/MM/AAAA</td>
                                            <td>32</td>
                                            <td>369€ HT</td>
                                            <td>183</td>
                                            <td>1437€ HT</td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL</td>
                                            <td>32</td>
                                            <td>369€ HT</td>
                                            <td>183</td>
                                            <td>1437€ HT</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <p class=" blue ex-md regular">CHIFFRE HEBDOMADAIRE <span class="dark-grey"> (du ...... au ....... )</span> </p>
                                <div id="container" style="height: 400px; margin: 0px auto 60px auto"></div>
                                <div class="row margin-top-lg">
                                    <div class="col-xs-6">
                                        <p class="blue center ex-md no-margin-bottom regular">MEILLEURS VENTES</p>
                                        <p class=" center sm light ">(du ..... au ...... )</p>
                                        <p class="center margin-md"><span class="blue">1. </span>Plat 1</p>
                                        <p class="center margin-md"><span class="blue">2. </span>Plat 2</p>
                                        <p class="center margin-md"><span class="blue">3. </span>Plat 3</p>
                                        <p class="center margin-md"><span class="blue">4. </span>Plat 4</p>
                                        <p class="center margin-md"><span class="blue">5. </span>Plat 5</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="blue center ex-md no-margin-bottom regular">MEILLEURS CLIENTS</p>
                                        <p class=" center sm light ">(du ..... au ...... )</p>
                                        <p class="center margin-md"><span class="blue">1. </span>Plat 1</p>
                                        <p class="center margin-md"><span class="blue">2. </span>Plat 2</p>
                                        <p class="center margin-md"><span class="blue">3. </span>Plat 3</p>
                                        <p class="center margin-md"><span class="blue">4. </span>Plat 4</p>
                                        <p class="center margin-md"><span class="blue">5. </span>Plat 5</p>
                                    </div>
                                </div>
                                <div class="hor-line xs center-block margin-bottom-md"></div>
                                <span class="light sm margin-sm">Contact Collect’eat: +33 (O) 1 56 87 90 34 57 - contact@collecteat.com</span>
                                <span class="right">1/15</span>
                            </div>
                        </div>
                        <div class=" margin-md row" style="text-align:right">
                            <div class="col-xs-12">
                                <button type="button" class="btn blue-bkg">IMPRIMER</button>
                                <button type="button" class="btn blue-bkg">TÉLÉCHARGER</button>
                                <button type="button" class="btn blue-bkg " id="data-rapport-envoyer-btn" >ENVOYER</button>
                            </div>
                        </div>
                    </div>

                    <div class="page-suivante-btn btn-1">
                        <li class="icon"></li>
                        <div class="txt">
                            <p>PAGE</p>
                            <p>SUIVANTE</p>
                        </div>
                    </div>
                    <div class="page-suivante-btn btn-2">
                        <li class="icon"></li>
                        <div class="txt">
                            <p>PAGE</p>
                            <p>SUIVANTE</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('php/footer.php'); ?>
</body>

</html>
