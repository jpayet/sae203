<?php
    require 'debut_html.inc.php';
    require 'header.inc.php';
?>

    <div id="demi-navbar">
        <ul>
            <li><a href="#">dernieres</a></li>
            <li><a href="#">sorties</a></li>
            <li><a href="#">jeux</a></li>
            <li><a href="#">darmode</a></li>
        </ul>
    </div>
    <h1>
        GAME LIRARY: explorer l'univers du jeu vidéo. <br />
        <!--Profiter de nombreuses données gratuitement-->
        <!--animation 2e texte qui prend la place et vice versa-->
    </h1>

    <article id="mlr-note">
        <div id="apercu">
            <img src="img/zeldaBOTWbanner.jpg" alt="">
        </div>
        <div id="frst-info">
            <h2>Le mieux noté</h2>
            <!-- design photoshop avec la note -->
            <!--Recupérer Nom,
            annee sortie,
            prix -->
        </div>
    </article>
    <hr>
    <article id="cp-coeur">
        <h3>Nos coups de coeurs</h3>
        <div id="p">
        <article class="jeu-coeur">
            <img src="img/xenoblade-chronicles-2.jpg" alt="">
            <div class="info">
                
            </div>
        </article>

        <article class="jeu-coeur">
            <img src="img/borderlands-3.jpg" alt="">
            <div class="info">
                <!-- recup donnes bdd -->
            </div>
        </article>

        <article class="jeu-coeur">
            <img src="img/ori.jpg" alt="">
            <div class="info">
                <!-- recup donnes bdd -->
            </div>
        </article>
        </div>
    </article>

    <div>
        <p>Back To Top</p>
    </div>

    <footer>
        <p>
            GAME LIBRARY - 2021-2022 - @Copyright <br />
            Tout droits réservés
        </p>
    </footer>
</body>

</html>