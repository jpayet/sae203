<!DOCTYPE html>
<html>
	<head>
	    <title>SAE203</title>
        <link rel="stylesheet" href="styles.css">
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
	    <hr />
	    <h1>Ajouter un studio</h1> 
	    <hr />
	    <form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
	        Date de création: <input type="text" name="date" min="1000" max="3000" required /><br />
	        Fondateur : <input type="text" name="fondateur" required /><br />
	        Co-fondateur : <input type="text" name="co_fondateur" value='' /><br />
	        Siege social (ville) : <input type="text" name="sc-ville" required /><br />
            Siege social (pays): <input type="text" name="sc-pays" required /><br />
	        <input type="submit" value="Ajouter" />
	    </form>
	</body>
</html>