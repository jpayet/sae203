<!DOCTYPE html>
<html>
	<head>
	    <title>SAE203</title>
        <link rel="stylesheet" href="styles.css">
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
	    <hr />
	    <h1>Ajouter une jeux vidéo</h1> 
	    <hr />
	    <form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
	        Titre : <input type="text" name="titre" required /><br />
	        Année de sortie: <input type="text" name="annee" min="1000" max="3000" required /><br />
	        Note : <input type="number" name="note" min="0" max="20" step="0.01" required />/20<br />
	        Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="0.01" required />€<br />
	        Disponibilité mobile : 
            <select name="dispo">
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            Multiplateformes : 
            <select name="multi">
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
	        Photo : <input type="file" name="photo" required /><br />
	        Studio : <select name="stud" required>
	        <?php
	            require '../lib_crud.inc.php';
	            $co=connexionBD();
	            afficherStudio($co);
	            deconnexionBD($co);
	        ?>
	        </select><br />
	        <input type="submit" value="Ajouter" />
	    </form>
	</body>
</html>