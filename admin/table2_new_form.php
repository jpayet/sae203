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
	<form class="add_form" action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
        <label for="nom"></label>
	    Nom : <input type="text" name="nom" required /><br />
        <label for="date"></label>
	    Date de création: <input type="text" name="date" min="1000" max="3000" required /><br />
        <label for="fondateur"></label>
	    Fondateur : <input type="text" name="fondateur" required /><br />
        <label for="co-fondateur"></label>
	    Co-fondateur : <input type="text" name="co_fondateur" /><br />
        <label for="siege_social_ville"></label>
	    Siege social (ville) : <input type="text" name="sc-ville" required /><br />
        <label for="siege_social_pays"></label>
        Siege social (pays): <input type="text" name="sc-pays" required /><br />
	    <input type="submit" value="Ajouter" />
	</form>

	<footer id="footer">
        <p>
            Copyright © 2021-2024 GameLibrary. Tous droits réservés. Un site made by @mmi21h11
        </p>
	</footer>
	</body>
</html>