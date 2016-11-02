<?php echo ' 
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
    </div>'
    ?>
