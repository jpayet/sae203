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

	<h1 style="text-align:center">Ajouter un nouveau jeu vidéo</h1>

	<form class="add_form" action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
		<label for="titre"></label>
	    Titre : <input type="text" name="titre" required /><br />
		<label for="annee"></label>
	    Année de sortie: <input type="text" name="annee" min="1000" max="3000" required /><br />
		<label for="note"></label>
	    Note : <input type="number" name="note" min="0" max="20" step="0.01" required /> /20<br />
		<label for="prix"></label>
	    Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="0.01" required /> €<br />
		<label for="dispo"></label>
	    Disponibilité mobile : 
        <select name="dispo">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select> <br>
		<label for="multi"></label>
        Multiplateformes : 
        <select name="multi">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select><br>
		<label for="photo"></label>
	    Photo : <input type="file" name="photo" required /><br />
		<label for="studio"></label>
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

	<footer id="footer">
        <p>
            Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
        </p>
    </footer>

	</body>
</html>