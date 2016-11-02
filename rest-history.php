<!DOCTYPE html>
<html>

<head>
    <?php include ('php/common-include.php'); ?>
        <?php include ('php/rest-commom-include.php'); ?>

</head>

<body onresize="resize()">
    <?php include ('php/rest-header.php'); ?>
        <?php include ('php/rest-modals.php'); ?>
            <!-- Modal msg-->
            <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="container-fluid">
                            <p class="blue center ex-md"> MESSAGES</p>
                            <table class="history-table ">
                                <tr>
                                    <th>DATE/HEURE</th>
                                    <th>STATUT</th>
                                    <th>COMMANDE</th>
                                    <th>CLIENT</th>
                                    <th>PRIX</th>
                                </tr>
                                <tr>
                                    <td>02.08.2016 15H30</td>
                                    <td>PRÊT</td>
                                    <td>N° : 5456435 / 6 artciles</td>
                                    <td>Paul MAURIN</td>
                                    <td>20€</td>
                                </tr>
                            </table>
                            <div class="hor-line xs center-block margin-md"></div>
                            <div class="msg-field">
                                <div class="msg-content other row">
                                    <p class="name">Paul MAURIN</p>
                                    <p class="txt">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua. Gerasam etimas</p>
                                </div>
                                <div class="msg-content me row">
                                    <p class="name"> CHEZ MICHEL</p>
                                    <p class="txt">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua. Gerasam etimas</p>
                                </div>
                                <div class="msg-content other row">
                                    <p class="name">Paul MAURIN</p>
                                    <p class="txt">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua. Gerasam etimas</p>
                                </div>
                                <div class="msg-content me row">
                                    <p class="name"> CHEZ MICHEL</p>
                                    <p class="txt">Opima habet adtributo conmerciorum nostris ingentes et repellendos nostris habet contigua. Gerasam etimas</p>
                                </div>
                            </div>
                            <div class="hor-line xs center-block margin-md"></div>
                            <div class="input-msg-field ">
                                <textarea rows="3"></textarea>
                                <button type="button" class="btn blue-bkg sm ver-center">ENVOYER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-content-home-page">
                <div class="rest-home-page-banner">
                    <div class="banner banner-top" id="banner-top-etablissement">
                        <div class="banner-content">
                            <p class="white lg">HISTORIQUE DE COMMANDE</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <table class="history-table margin-lg hidden-xs">
                        <tr>
                            <th>DATE/HEURE</th>
                            <th>STATUT</th>
                            <th>COMMANDE</th>
                            <th>CLIENT</th>
                            <th>PRIX</th>
                        </tr>
                        <tr>
                            <td>02.08.2016 15H30</td>
                            <td>PRÊT</td>
                            <td>N° : 5456435 / 6 artciles</td>
                            <td>Paul MAURIN</td>
                            <td>20€</td>
                            <td>
                                <button type="button" class="btn blue-bkg badge-parent" data-toggle="modal" data-target="#msgModal">MESSAGES<span class="badge">4</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02.08.2016 15H30</td>
                            <td>PRÊT</td>
                            <td>N° : 5456435 / 6 artciles</td>
                            <td>Paul MAURIN</td>
                            <td>20€</td>
                            <td>
                                <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02.08.2016 15H30</td>
                            <td>REFUSÉ</td>
                            <td>N° : 5456435 / 6 artciles</td>
                            <td>Paul MAURIN</td>
                            <td>20€</td>
                            <td>
                                <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02.08.2016 15H30</td>
                            <td>EN COUR</td>
                            <td>N° : 5456435 / 6 artciles</td>
                            <td>Paul MAURIN</td>
                            <td>20€</td>
                            <td>
                                <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02.08.2016 15H30</td>
                            <td>PRÊT</td>
                            <td>N° : 5456435 / 6 artciles</td>
                            <td>Paul MAURIN</td>
                            <td>20€</td>
                            <td>
                                <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                            </td>
                        </tr>
                    </table>
                    <table class="history-table margin-lg visible-xs-block">
                        <tbody>
                            <tr>
                                <th>DATE/HEURE</th>
                                <th>STATUT</th>
                                <th>COMMANDE</th>
                                <th>CLIENT</th>
                                <th>PRIX</th>
                            </tr>
                            <tr>
                                <td>02.08.2016 15H30</td>
                                <td>PRÊT</td>
                                <td>N° : 5456435 / 6 artciles</td>
                                <td>Paul MAURIN</td>
                                <td>20€</td>

                            </tr>
                            <tr>
                                <td style="border:none" colspan="5">
                                    <button type="button" class="btn blue-bkg badge-parent" data-toggle="modal" data-target="#msgModal">MESSAGES<span class="badge">4</span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>02.08.2016 15H30</td>
                                <td>PRÊT</td>
                                <td>N° : 5456435 / 6 artciles</td>
                                <td>Paul MAURIN</td>
                                <td>20€</td>

                            </tr>
                            <tr>
                                <td style="border:none" colspan="5">
                                    <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>02.08.2016 15H30</td>
                                <td>REFUSÉ</td>
                                <td>N° : 5456435 / 6 artciles</td>
                                <td>Paul MAURIN</td>
                                <td>20€</td>
                            </tr>
                            <tr>
                                <td style="border:none" colspan="5">
                                    <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>02.08.2016 15H30</td>
                                <td>EN COUR</td>
                                <td>N° : 5456435 / 6 artciles</td>
                                <td>Paul MAURIN</td>
                                <td>20€</td>
                            </tr>
                            <tr>
                                <td style="border:none" colspan="5">
                                    <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>02.08.2016 15H30</td>
                                <td>PRÊT</td>
                                <td>N° : 5456435 / 6 artciles</td>
                                <td>Paul MAURIN</td>
                                <td>20€</td>
                            </tr>
                            <tr>
                                <td style="border:none" colspan="5">
                                    <button type="button" class="btn blue-bkg badge-parent">MESSAGES<span class="badge"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include ('php/footer.php'); ?>
</body>

</html>
