<?php
    require 'debut_html.inc.php';
?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><span id="brand">Game</span>Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="listing.php">Catalogue</a>
                    <a class="nav-item nav-link" href="form_recherche.php">Recherche</a>
                    <a class="nav-item nav-link" href="admin/admin.php">Administration</a>
                </div>
            </div>
        </nav>
    </header>

<?php

$nomJeu=$_GET['texte'];
    
$nomJEU = $_GET['texte'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'mmi21h11', '$Root22105824');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM jeux_video 
            INNER JOIN stud_developpement 
            ON jeux_video._stud_id = stud_developpement.stud_id
            WHERE jv_titre = '". $nomJeu . "'";
$resultat = $mabd->query($req);
foreach ($resultat as $value) {
    echo '<img class="vignette" src="images/'.$value['bd_photo'].'">';
    echo '<h3>'.$value['bd_titre'] . '</h3>';
    echo '<p>tarif: ' . $value['bd_prix'] . ' euro </p>';
    echo '<p class="page">' . $value['bd_nb_pages'] . ' pages </p>';
    echo '<p>Résumé: ' . $value['bd_resume'] . ' </p>';
    echo '<p class="auteur"> de ' . $value['auteur_nom'] . '</p>';
    echo '<hr>';
}
?>
...
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';
?>