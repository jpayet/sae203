<!DOCTYPE html>
<html>
	<head>
		<title>SAE203</title>
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="table2_gestion.php">Gestion</a>
	    <hr />
	    <h1>Modifier un studio</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_POST['num'];
	        $nom=$_POST['nom'];
	        $date=$_POST['date'];
	        $fondateur=$_POST['fondateur'];
            $co_fondateur=$_POST['co_fondateur'];
	        $scville=$_POST['scville'];
            $scpays=$_POST['scpays'];
	        //var_dump($_POST);
	        //var_dump($_FILES);
	
	        $co=connexionBD();
	        modifierStud($co, $id, $nom, $date, $fondateur, $co_fondateur,  $scville, $scpays);
	        deconnexionBD($co);
	    ?>
	</body>
</html>