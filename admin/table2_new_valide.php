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

	<footer id="footer">
			<p>
				Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
			</p>
	</footer>
	
	</body>
</html>