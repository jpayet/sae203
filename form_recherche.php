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
    <p>Vous cherchez quelque chose de spécial ? C'est ici que ça se passe !</p>
</div>

<main class="form-bg">
<div class="formulaire">
<h1 id="titrep2">Trouvez le jeu qu'il vous faut !</h1>

<form action="reponse_recherche.php" class="form1" method="GET" data-parsley-validate>
    <input type="search" id="jeu_search" name="texte" list="jeux" autocomplete="off" placeholder=" Rechercher"/>
    <datalist id="jeux">
        <?php
            // On va afficher ici la datalist
            require 'lib_crud.inc.php';
            $co=connexionBD();
            genererDatalistJeux($co);
            deconnexionBD($co);
        ?>
    </datalist>
    <button type="submit" id="btn-search"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></button>
</form>
</div>
</main>

<footer id="footer">
        <p>
            Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
        </p>
</footer>

<?php
    require 'fin_html.inc.php';
?>