<!DOCTYPE html>
<html>
<head>
	<title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
    <a href="../index.php">Accueil</a> | <a href="table2_gestion.php">Gestion</a>
	<hr>
    <h1>Modifier un studio</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $liste=getStud($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        Nom : <input type="text" name="nom" value="<?php echo $liste['stud_nom']; ?>" required/><br />
        Date de création : <input type="text" name="date" min="1000" max="3000" value="<?= $liste['stud_date_creation']; ?>" required /><br />
        Fondateur : <input type="text" name="fondateur" value="<?= $liste['stud_fondateur']; ?>" required /><br />
        Co-fondateur : <input type="text" name="co_fondateur" value="<?= $liste['stud_co_fondateur']; ?>" /><br />
        Siège social ville : <input type="text" name="scville" value="<?= $liste['stud_siege_social_ville']; ?>" required /><br />
        Siège social pays : <input type="text" name="scpays" value="<?= $liste['stud_siege_social_pays']; ?>" required /><br />
        <input type="submit" value="Modifier" />
    </form>
</body>
</html>