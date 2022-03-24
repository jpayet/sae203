<?php
    require '../debut_html.inc.php';
?>

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

        <h1 class="gestion-h1">Gestion des données</h1>

        <p class="add"><a href="table2_new_form.php">Ajouter un studio<i class="fa-solid fa-plus"></i></a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherTableSudio($co);
            deconnexionBD($co);
        ?>

        <?php   
            require '../footer_html.inc.php';
        ?>

    </body>
</html>