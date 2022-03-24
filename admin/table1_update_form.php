<!DOCTYPE html>
<html>
<head>
	<title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
    <a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
	<hr>
    <h1>Modifier une bande dessinée</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $album=getBD($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        Titre : <input type="text" name="titre" value="<?php echo $album['jv_titre']; ?>" required/><br />
        Année de sortie: <input type="text" name="annee" min="1000" max="3000" value="<?= $album['jv_annee_sortie']; ?>" required /><br />
        note : <input type="number" name="note" min="0" max="20" step="0.01" value="<?= floatval($album['jv_note']); ?>" required />/20<br />
        Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="0.01" value="<?= $album['jv_prix']; ?>" required />€<br />
        Disponibilité mobile : <select name="dispo" required>
            <option value="<?= $album['jv_disponibilite_mobile']; ?>"> <?php echo $album['jv_disponibilite_mobile']; ?></option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
        Multiplateformes : <select name="multi" required>
            <option value="<?= $album['jv_multiplateformes']; ?>"> <?php echo $album['jv_multiplateformes']; ?></option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
        Photo : <input type="file" name="photo" required /><br />
        Studio : <select name="studio" required>
        <?php
            $co=connexionBD();
            afficherStudioSelectionne($co, $album['_stud_id']);
            deconnexionBD($co);
        ?>
        </select><br />
        <input type="submit" value="Modifier" />
    </form>
</body>
</html>