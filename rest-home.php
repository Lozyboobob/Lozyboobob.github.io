<!DOCTYPE html>
<html>

<head>

    <?php include ('php/common-include.php'); ?>

        <?php include ('php/rest-commom-include.php'); ?>
</head>

<body onresize="resize()">
    <!-- Modal -->
    <div class="modal fade" id="connection-diag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="container-fluid">
                    <p class="blue ex-md center margin-top-lg">CONNEXION</p>
                    <label>E-mail</label>
                    <br>
                    <input type="text" class="form-control margin-bottom-sm blue">
                    <label class="margin-top-sm">Mot de passe</label>
                    <br>
                    <input type="text" class="form-control margin-bottom-sm blue">
                    <p class="margin-top-sm sm blue light">Mot de passe oublié</p>
                    <button type="button" class="btn grey-frame margin-top-sm modal-fb-btn">connexion avec Facebook</button>
                    <button type="button" class="btn blue-bkg center-block margin-md btn-lg modal-connexion-btn">CONNEXION</button>
                </div>
            </div>
        </div>
    </div>
    <div class="rest-header">
        <div class="container hidden-xs">
            <img src="images/Logo-04.svg" class="logo ">
            <div class="header-btns">
                <button type="button" class="btn blue-frame connection-btn" style="margin-right:20px;" data-toggle="modal" data-target="#connection-diag">connexion</button>
                <div class="dropdown" style="display:inline-block">
                    <button class="btn blue-frame nav-btn dropdown-toggle" style="margin-right:20px;display:none" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Enzo & Famiglia
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="rest-command.php">COMMANDES<span class="badge">3</span></a></li>
                        <li><a href="rest-history.php">HISTORIQUE</a></li>
                        <li><a href="rest-carte.php">CARTE</a></li>
                        <li><a href="rest-mon-etablissement.php">MON ÉTABLISSEMENT</a></li>
                        <li><a href="rest-data.php">DATA</a></li>
                        <li><a href="rest-home.php" id="deconnec-btn">DÉCONNEXION</a></li>
                    </ul>
                </div>
                <button type="button" class="btn" id="lang-btn" style="margin-right:15px;">FR</button>

            </div>
        </div>
        <div class="container visible-xs">
            <img src="images/Logo-04.svg" class="logo ">
            <div class="header-btns">
                <button type="button" class="btn blue-frame connection-btn" data-toggle="modal" data-target="#connection-diag">connexion</button>
                <div class="dropdown" style="display:inline-block">
                    <button class="btn blue-frame nav-btn dropdown-toggle" style="margin-right:0px;display:none" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Enzo & Famiglia
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="rest-command.php">COMMANDES<span class="badge">3</span></a></li>
                        <li><a href="rest-history.php">HISTORIQUE</a></li>
                        <li><a href="rest-carte.php">CARTE</a></li>
                        <li><a href="rest-mon-etablissement.php">MON ÉTABLISSEMENT</a></li>
                        <li><a href="rest-data.php">DATA</a></li>
                        <li><a href="rest-home.php" id="deconnec-btn">DÉCONNEXION</a></li>
                    </ul>
                </div>
                <button type="button" class="btn" id="lang-btn">FR</button>
            </div>

        </div>
    </div>
    <?php include ('php/rest-modals.php'); ?>
        <div class="rest-content-home-page">
            <div class="rest-home-page-banner">
                <div class="banner" id="banner-vd">
                    <div class="vd-content ">
                        <a href="#inscription-part"><button class="btn blue-bkg ex-md">DEVENIR RESTAURATEUR
                            <br> PARTENAIRE</button></a>
                    </div>

                    <video autoplay loop preload="auto" style="width:100%;">
                        <source src="http://s3.amazonaws.com/cloudways-website-videos/Home.mp4"> [if LT IE 9]>
                        <object type="application/x-shockwave-flash" data="http://flashfox.googlecode.com/svn/trunk/flashfox.swf" width="100%" height="770">
                            <param name="movie" value="http://flashfox.googlecode.com/svn/trunk/flashfox.swf">
                            <param name="allowFullScreen" value="true">
                            <param name="wmode" value="transparent">
                            <param name="flashVars" value="autoplay=true&controls=false&loop=true&poster=http%3A%2F%2Fwww.cloudways.com%2Ftemplate%2Fdefault%2Fimg%2Fimg-new%2Fhome_bg.jpg&src=http%3A%2F%2Fs3.amazonaws.com%2Fcloudways-website-videos%2FHome.mp4">
                        </object>
                        [endif]

                    </video>
                </div>
            </div>
            <div class="container">
                <div class="row margin-md">
                    <div class="col-sm-4 ">
                        <p class="title ex-md">QUOD CUM ITA SIT</p>
                        <div class="mask-item">
                            <div class="item-bkg" id="food"></div>
                            <div class="item-mask"></div>
                            <p class="white ex-md ">TITRE</p>
                        </div>
                        <p class="center margin-md">Proinde die funestis interroga tionibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis.</p>
                    </div>
                    <div class="col-sm-4 ">
                        <p class="title ex-md">QUOD CUM ITA SIT</p>
                        <div class="mask-item">
                            <div class="item-bkg" id="food"></div>
                            <div class="item-mask"></div>
                            <p class="white ex-md ">TITRE</p>
                        </div>
                        <p class="center margin-md">Proinde die funestis interroga tionibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis.</p>
                    </div>
                    <div class="col-sm-4 ">
                        <p class="title ex-md">QUOD CUM ITA SIT</p>
                        <div class="mask-item">
                            <div class="item-bkg" id="food"></div>
                            <div class="item-mask"></div>
                            <p class="white ex-md ">TITRE</p>
                        </div>
                        <p class="center margin-md">Proinde die funestis interroga tionibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis.</p>
                    </div>
                </div>
            </div>
            <div class="banner  container-fluid" id="inscription-banner">
                <div class="container" id="inscription-container">
                    <div class="col-xs-12 col-sm-6" id="inscription-left">
                        <div>
                            <p class="no-margin-bottom lg bold white " style="text-align:left">INSCRIVEZ VOUS</p>
                            <p class="no-margin-bottom ex-md bold white" style="text-align:left">POUR TRAVAILLER EN PARTENARIAT AVEC COLLECT’EAT</p>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 " id="inscription-part">
                        <form class="inspcription-block">
                            <p class="blue center ex-md">INSCRIPTION</p>
                            <label>Nom de l’établissement</label>
                            <br>
                            <input type="text" class=" margin-bottom-sm form-control">
                            <label>Prénom & nom de responsable*</label>
                            <br>
                            <input type="text" class="form-control">
                            <p style="text-align:left" class="sm blue margin-bottom-sm">vos coordonnées restent confidentielles</p>
                            <label>Adresse de l’établissement</label>
                            <br>
                            <input type="text" class="margin-bottom-sm form-control" placeholder="N° de voie / CP / ville">
                            <label>Téléphone fixe (facultatif)</label>
                            <br>
                            <input type="text" class="input-sm margin-bottom-sm form-control">
                            <label>Téléphone mobile</label>
                            <input type="text" class="input-sm margin-bottom-sm form-control" placeholder="+ 33 (0) 6">
                            <label>E-mail</label>
                            <br>
                            <input type="text" class=" margin-bottom-sm form-control" placeholder="+ 33 (0) 6">
                            <label>Disposez-vous d’un TPV relié à internet ?</label>
                            <br>
                            <button type="button" class="btn grey-frame margin-bottom-sm" style="height:30px">Oui</button>
                            <button type="button" class="btn grey-frame margin-bottom-sm" style="height:30px">Non</button>
                            <br>
                            <label>Comment avez-vous entendu parler de Collect’eat ?</label>
                            <br>
                            <select class="grey margin-bottom-sm form-control" style="width:70%">
                                <option>Choisir</option>
                            </select>
                            <input type="checkbox" name="inscrip-cb" id="inscrip-cb" class="margin-bottom-sm">
                            <label for="inscrip-cb" style="margin-left:10px" class="margin-bottom-sm sm">J’accèpte les <a class="blue decoration">conditions générales d’utilisation</a></label>
                           <button type="button" class="btn blue-bkg center-block" id="inscription-btn">DEVENIR RESTAURATEUR PARTENAIRE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('php/footer.php'); ?>

            <script src="componentMorph/js/scroll.js"></script>
    <script>
        $("#inscription-btn").click(function(){
            location.href="rest-mon-etablissement.php";
        })
    </script>
</body>

</html>
