<!DOCTYPE html>
<html>

<head>

    <?php include ('php/common-include.php'); ?>
        <script src="js/home.js"></script>
</head>

<body>

    <div class="header">
        <div class="container hidden-xs">
            <img src="images/Logo-04.svg" class="logo">
            <div class="header-btns">
                <button type="button" class="btn blue " id="connection-btn">connexion</button>
                <button type="button" class="btn blue" id="inscription-btn">inscription</button>
                <button type="button" class="btn grey-frame " id="restaurateur-btn">JE SUIS RESTAURATEUR</button>
                <div class="shopping-car btn">
                    <img src="images/20160808_Collecteat-07.svg" id="shopping-car-btn">
                    <p>180€</p>
                </div>
                <button type="button" class="btn" id="lang-btn">FR</button>

            </div>
        </div>
        <div class="container visible-xs">
            <div class="row">
                <img src="images/Logo-04.svg" class="logo">
                <div class="line-1-btns">
                    <div class="shopping-car">
                        <img src="images/20160808_Collecteat-07.svg" id="shopping-car-btn">
                        <p>180€</p>
                    </div>
                    <button type="button" class="btn" id="lang-btn">FR</button>
                </div>

            </div>
            <div class="row line-2-btns center-block">
                <button type="button" class="btn blue no-border" id="connection-btn">connexion</button>
                <button type="button" class="btn blue no-border" id="inscription-btn">inscription</button>
                <button type="button" class="btn grey-frame " id="restaurateur-btn">JE SUIS RESTAURATEUR</button>
            </div>
        </div>
    </div>
    <div class="content-home-page">
        <div class="home-page-banner">
            <div class="banner" id="banner1">
                <div class="banner-content">
                    <p class="white lg bold">VOS PLATS PRÉFÉRÉS, À EMPORTER</p>
                    <div class="nor-wrap">
                        <p class="white">Commandez votre plat à prix réduit dans l’un de vos restaurants de quartier et venez le retirer à l’heure choisie</p>
                    </div>
                    <div class="input-frame">
                        <input type="text" placeholder="Entrez votre adresse">
                        <button type="button" class="btn blue-bkg visible-xs">TROUVER</button>
                        <button type="button" class="btn blue-bkg hidden-xs">TROUVER LES RESTAURANTS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="comment-ca-marche-block">
            <p class="title lg">COMMENT ÇA MARCHE ?</p>
            <div class="row margin-top-md">
                <div class="col-xs-4 ">
                    <img src="images/20160808_Collecteat-28.svg" width="50%" class="center-block">

                </div>
                <div class="col-xs-4 ">
                    <img src="images/20160808_Collecteat-29.svg" width="60%" class="center-block">

                </div>
                <div class="col-xs-4 ">
                    <img src="images/20160808_Collecteat-30.svg" width="50%" class="center-block">

                </div>
            </div>
            <div class="row margin-bottom-md">
                <div class="col-xs-4 ">

                    <p class="gal-item">Commandez votre repas à emporter à prix réduit</p>
                </div>
                <div class="col-xs-4 ">

                    <p class="gal-item">Allez chercher votre commande à l’heure choisie</p>
                </div>
                <div class="col-xs-4 ">

                    <p class="gal-item"> Régalez-vous !</p>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="title lg">POURQUOI COLLECT’EAT C’EST MIEUX ?</p>
        </div>
        <div class="light-grey">
            <div class="container">
                <div class="nor-wrap  margin-lg">
                    <p class="title ex-md">DU CHOIX OU QUE VOUS SOYEZ</p>
                    <p class="center">Votre quartier regroupe de nombreux restaurants aussi divers que variés. Collect’Eat vous permet d’aller récupérer vos plats quelque soit l’endroit où vous êtes</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="nor-wrap  margin-lg">
                    <p class="title ex-md">LA QUALITÉ A MOINDRE COÛT</p>
                    <p class="center">Chez Collect’Eat nous ne plaisantons pas avec la qualité! Nos restaurants partenaires sont sélectionnés avec amour pour leur cuisine savoureuse, proposée avec une réduction minimum de 10%</p>
                    <img src="images/20160808_Collecteat-02.svg" class="center-block" width="90">
                </div>
            </div>
        </div>
        <div class="mid-grey">
            <div class="container">
                <div class="nor-wrap  margin-lg">
                    <p class="title ex-md">GAGNEZ DU TEMPS</p>
                    <p class="center">Vous n’attendrez plus 20 minutes à la caisse ou une heure votre livreur...</p>
                </div>
            </div>
        </div>
        <div class="white">
            <div class="container">
                <p class="title lg">À TOUTE HEURE DE LA JOURNÉE</p>
                <div class="row " id="toute-heure">
                    <div class="hor-line lg"></div>
                    <img src="images/20160808_Collecteat-31.png" class="center-block heure">

                    <img src="images/20160808_Collecteat-32.png" class="center-block heure">

                    <img src="images/20160808_Collecteat-33.png" class="center-block heure">

                </div>

                <div class="row heure-txt">
                    <div class="col-xs-4">

                        <p class=" sm">En route pour le bureau...</p>
                    </div>
                    <div class="col-xs-4 ">

                        <p class=" sm">A la pause dej’...</p>
                    </div>
                    <div class="col-xs-4 ">

                        <p class=" sm">En rentrant à la maison...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blue" id="ce-sont-aime">
            <div class="container">
                <p class="title lg white">CE QU’ILS ONT AIMÉ</p>
                <div class="icon-list">
                    <img src="images/Logo_Facebook.svg" width="10">
                    <img src="images/Logo_twitter.svg" width="20">
                    <img src="images/Logo_instagram.svg" width="20">
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 ">
                        <p class="center white sm quote">
                            Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae !</p>
                        <p class="right sm">#BLABLABLA</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <p class="center white sm quote">
                            Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae !</p>
                        <p class="right sm">#BLABLABLA</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <p class="center white sm quote">
                            Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae !</p>
                        <p class="right sm">#BLABLABLA</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 ">
                        <p class="center white sm quote">
                            Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae !</p>
                        <p class="right sm">#BLABLABLA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="white">
            <div class="container">
                <p class="title lg">NOTRE SÉLÉCTION
                    <br><span class="blue">MINUTIEUSE </span>DE RESTAURANTS</p>
                <img src="images/Screen%20Shot%202016-08-09%20at%2016.06.00.png" class="center-block margin-bottom-md" width="100%">
            </div>
        </div>
        <div class="banner" id="banner2">
            <div class="banner-content">
                <p class="white lg bold">COMMANDEZ EN <span class="blue">GROUPE</span> GRÂCE À COLLECT’EAT</p>
                <p class="white">Fini les complications au moment du partage de l’addition!</p>
            </div>
        </div>
        <div class="white" id="bon-plan">
            <div class="container">
                <div class="nor-wrap margin-lg">
                    <p class="center light ex-md">POUR PROFITER DES <span class="blue">BONS PLANS</span> COLLECT’<span class="bold">EAT</span>, C’EST PAR ICI !</p>
                    <div class="input-box row">
                        <div class="col-sm-3 col-xs-4">
                            <input type="text" placeholder="Code postal" class="italy sm  frame-input">
                        </div>
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <input type="text" placeholder="E-mail" class="italy sm  frame-input">
                        </div>
                        <div class="col-sm-3 col-xs-12 fuc-btn">
                            <button class="btn blue-bkg center-block">JE M’INSCRIS</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   <?php include ('php/footer.php'); ?>
</body>

</html>
