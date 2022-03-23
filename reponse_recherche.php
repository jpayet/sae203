<?php
    require 'debut_html.inc.php';
?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><span id="brand">Game</span>Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="listing.php">Catalogue</a>
                    <a class="nav-item nav-link" href="form_recherche.php">Recherche</a>
                    <a class="nav-item nav-link" href="admin/admin.php">Administration</a>
                </div>
            </div>
        </nav>
    </header>

    <?php

        require 'lib_crud.inc.php';
        $co=connexionBD();
        afficherResultatRecherche($co);
        deconnexionBD($co);
        
        require 'footer_html.inc.php';
        require 'fin_html.inc.php';
    ?>