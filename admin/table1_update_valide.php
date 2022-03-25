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

	    <h1 class="gestion-h1">Vous venez de modifier la table des jeux vidéos</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_POST['num'];
	        $titre=$_POST['titre'];
	        $prix=$_POST['prix'];
	        $annee=$_POST['annee'];
            $note=$_POST['note'];
	        $dispo=$_POST['dispo'];
            $multi=$_POST['multi'];
	        $studio=$_POST['studio'];
	        //var_dump($_POST);
	        //var_dump($_FILES);
	
	        $imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu ! Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], "../img/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }
	
	        $co=connexionBD();
	        modifierBD($co, $id, $titre, $annee, $nouvelleImage, $note,  $prix, $dispo, $multi, $studio);
	        deconnexionBD($co);
	    ?>

	<p class="center"><a href="jeux_video"><i class="fa-solid fa-arrow-left"></i> Retourner sur la base de données</a></p>

	<footer id="footer">
			<p>
				Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
			</p>
	</footer>
	</body>
</html>