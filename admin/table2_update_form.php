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
    
    <h1 class="gestion-h1">Modifier un studio</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $liste=getStud($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form class="add_form" action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        <label for="nom"></label>
        Nom : <input type="text" name="nom" value="<?php echo $liste['stud_nom']; ?>" required/><br />
        <label for="date"></label>
        Date de création : <input type="text" name="date" min="1000" max="3000" value="<?= $liste['stud_date_creation']; ?>" required /><br />
        <label for="fondateur"></label>
        Fondateur : <input type="text" name="fondateur" value="<?= $liste['stud_fondateur']; ?>" required /><br />
        <label for="co-fondateur"></label>
        Co-fondateur : <input type="text" name="co_fondateur" value="<?= $liste['stud_co_fondateur']; ?>" /><br />
        <label for="siege_social_ville"></label>
        Siège social ville : <input type="text" name="scville" value="<?= $liste['stud_siege_social_ville']; ?>" required /><br />
        <label for="siege_social_pays"></label>
        Siège social pays : <input type="text" name="scpays" value="<?= $liste['stud_siege_social_pays']; ?>" required /><br />
        <input type="submit" value="Modifier" />
    </form>

    <p class="center"><a href="studio"><i class="fa-solid fa-arrow-left"></i> Retourner sur la base de données</a></p>

    <footer id="footer">
        <p>
            Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
        </p>
    </footer>
</body>
</html>