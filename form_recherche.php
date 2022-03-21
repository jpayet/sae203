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
    <input type="text" list="jeu" id="jeu_search" name="texte" placeholder="Entrer un nom" />
    <datalist id="jeu">
        <option value="Borderlands 3">
        <option value="Mario Kart 8 Deluxe">
        <option value="Xenoblade Chronicles 2">
        <option value="Cuphead">
        <option value="XCOM 2">
        <option value="Clash Royale">
    </datalist>
    <button type="submit" id="btn-search">rechercher</button>
</form>

<!--
    <form action="reponse_recherche.php" class="form2" data-parsley-validate>
    <h2>Recherche avancée</h2>
    <div class="textbox">
        <i>€</i>
        <input type="number" placeholder="prix minimum" id="prix_min" name="prix_min" data-parsley-type="number">
    </div>
    <div class="textbox">
        <i>€</i>
        <input type="number" placeholder="prix maximum" id="prix_max" name="prix_max" data-parsley-type="number">
    </div>
    <input type="submit" value="Rechercher" id="btn-last">
</form>
-->

<?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';
?>