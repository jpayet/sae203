<!DOCTYPE html>
<html>
	<head>
		<title>SAE203</title>
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
	    <hr />
	    <h1>Ajouter un studio</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $nom=$_POST['nom'];
            $date=$_POST['date'];
	        $fonda=$_POST['fondateur'];
	        $cofonda=$_POST['co_fondateur'];
	        $scville=$_POST['sc-ville'];
	        $scpays=$_POST['sc-pays'];
	        //var_dump($_POST);
	        //var_dump($_FILES);
	
	        $co=connexionBD();
	        ajouterStudio($co, $nom, $date, $fonda, $cofonda,  $scville, $scpays);
	        deconnexionBD($co);
	    ?>
	</body>
</html>