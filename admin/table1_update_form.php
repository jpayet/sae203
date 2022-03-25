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
    
    <h1 class="gestion-h1">Modifier un jeu</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $album=getBD($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form class="add_form" action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        <label for="titre"></label>
        Titre : <input type="text" name="titre" value="<?php echo $album['jv_titre']; ?>" required/><br />
        <label for="annee"></label>
        Année de sortie: <input type="text" name="annee" min="1000" max="3000" value="<?= $album['jv_annee_sortie']; ?>" required /><br />
        <label for="note"></label>
        note : <input type="number" name="note" min="0" max="20" step="0.01" value="<?= floatval($album['jv_note']); ?>" required />/20<br />
        <label for="prix"></label>
        Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="0.01" value="<?= $album['jv_prix']; ?>" required />€<br />
        <label for="dispo"></label>
        Disponibilité mobile : <select name="dispo" required>
            <option value="<?= $album['jv_disponibilite_mobile']; ?>"> <?php echo $album['jv_disponibilite_mobile']; ?></option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
        <label for="multi"></label>
        Multiplateformes : <select name="multi" required>
            <option value="<?= $album['jv_multiplateformes']; ?>"> <?php echo $album['jv_multiplateformes']; ?></option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
        <label for="photo"></label>
        Photo : <input type="file" name="photo" required /><br />
        <label for="studio"></label>
        Studio : <select name="studio" required>
        <?php
            $co=connexionBD();
            afficherStudioSelectionne($co, $album['_stud_id']);
            deconnexionBD($co);
        ?>
        </select><br />
        <input type="submit" value="Modifier" />
    </form>

    <p class="center"><a href="jeux_video"><i class="fa-solid fa-arrow-left"></i> Retourner sur la base de données</a></p>

    <footer id="footer">
        <p>
            Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
        </p>
    </footer>
</body>
</html>