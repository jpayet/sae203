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
                <a class="nav-item nav-link " href="index.php">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="listing.php">Catalogue</a>
                <a class="nav-item nav-link active" href="form_recherche.php">Recherche</a>
                <a class="nav-item nav-link" href="admin/admin.php">Administration</a>
            </div>
        </div>
    </nav>
</header>

<div id="ss-navbar">
    Bienvenue sur <span><b> GameLibrary </b></span> : le site receuil des jeux vidéos sur Consoles, PC et mobiles.
</div>


<h1 id="titrep2">Trouvez le <span>jeu</span> qu'il vous faut <span>!</span></h1>

<form action="reponse_recherche.php" class="form1" method="GET" data-parsley-validate>
    <input type="search" id="jeu_search" name="texte" list="jeux" autocomplete="off" />
    <datalist id="jeux">
        <?php
            // On va afficher ici la datalist
            require 'lib_crud.inc.php';
            $co=connexionBD();
            genererDatalistJeux($co);
            deconnexionBD($co);
        ?>
    </datalist>
    <button type="submit" id="btn-search">rechercher</button>
</form>

<?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';
?>