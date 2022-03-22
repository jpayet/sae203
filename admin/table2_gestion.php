<!DOCTYPE html>
<html>
    <head>
        <title>SAE203</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
        <hr />
        <h1>Gestion des données</h1>

        <p><a href="table2_new_form.php">Ajouter un studio</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherTableSudio($co);
            deconnexionBD($co);
        ?>
    </body>
</html>