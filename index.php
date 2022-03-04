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
                    <a class="nav-item nav-link" href="#">Administration</a>
                </div>
            </div>
        </nav>
    </header>

    <div id="ss-navbar">
        Bienvenue sur <span><b> GameLibrary </b></span> : le site receuil des jeux vidéos sur Consoles, PC et mobiles.
    </div>

    <article id="mlr-note">
        <div id="apercu">
            <img src="img/zeldaBOTWbanner.jpg" alt="">
        </div> 
        <div id="frst-info">
            <h1>Le mieux noté</h2>
            <p>
                <span id="titreNote">The Legend Of Zelda : Breath Of The Wild </span><br>
            </p>
            <img id="noteimg" src="img/note-sae203.png" alt="">
            <p>
                <i>sortie le 03/03/2017 </i><br>
                prix sur le <span id="prixNote">Nintendo e-shop</span><b>: 69.99€ </b> <br>
                Obtenir 👇<br>
                <a href="https://www.nintendo.fr/Jeux/Wii-U/The-Legend-of-Zelda-Breath-of-the-Wild-893260.html"><img src="img/eshop.png" alt=""></a>
            </p>
        </div>
    </article>
    <hr>
    <article id="cp-coeur">
        <h2>Nos coups de coeurs</h3>
        <div class="imgcoeur">
            <img src="img/xcom2.jpg" alt="">
            <img src="img/ori.jpg" alt="">
            <img src="img/borderlands-3.jpg" alt="">
        </div> 
    </article>

<?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';
?>