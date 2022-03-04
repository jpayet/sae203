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
                <a class="nav-item nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="listing.php">Catalogue</a>
                <a class="nav-item nav-link" href="form_recherche.php">Recherche</a>
                <a class="nav-item nav-link" href="#">Administration</a>
            </div>
        </div>
    </nav>
</header>

<div id="ss-navbar">
    Bienvenue sur <span><b> GameLibrary </b></span> : le site receuil des jeux vidéos sur Consoles, PC et mobiles.
</div>

<?php
    $mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'bdd22105824');   
    $mabd->query('SET NAMES utf8;');

    $req = "SELECT * FROM jeux_video INNER JOIN stud_developpement ON jeux_video._stud_id = stud_developpement.stud_id";
    $resultat = $mabd->query($req); 

    echo '<div class="pcp">';
        foreach ($resultat as $value) {

            echo '<div class="infobdd">' ;
            echo '<h3>'.$value['jv_titre'] . '</h3>';
            echo '<img class="image" src="'.$value['jv_photo'].'"> <br>';
            echo '<br> <p>Prix: ' . $value['jv_prix'] . '€ </p>';
            echo '<p class="sortie"> Date de sortie : <span>' . $value['jv_annee_sortie'] .'</span></p>';
            echo '<p class="notelist">Note: ' . $value['jv_note'] .'</p>';
            echo '<p class="stud_dev"> Studio de developpement: <span>' . $value['stud_nom']. '</span></p>';
            echo '<p class="fondateurs"> Fondateur(s) : ' .$value['stud_fondateur']. ' ; ' .$value['stud_co-fondateur']. '</p>'; 
            echo '</div>';  
        }
    echo '</div>';
?>
<?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';
?>