<!DOCTYPE html>
<html>
    <head>
        <title>SAE203</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><span id="brand">Game</span>Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="../index.php">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="../listing.php">Catalogue</a>
                    <a class="nav-item nav-link" href="../form_recherche.php">Recherche</a>
                    <a class="nav-item nav-link  active" href="admin.php">Administration</a>
                </div>
            </div>
        </nav>
    </header>

        <h1>Gestion des données</h1>

        <p><a href="table1_new_form.php">Ajouter un jeux vidéo</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListe($co);
            deconnexionBD($co);

            require '../footer_html.inc.php';
        ?>
    </body>
</html>