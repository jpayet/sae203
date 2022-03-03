<?php
    require 'debut_html.inc.php';
    require 'header.inc.php';
?>

<h1 id="titrep2">Trouvez le <span>jeu</span> qu'il vous faut <span>!</span></h1>

<form action="reponse_recherche.php" class="form1" data-parsley-validate>
    <input type="search" list="jeu" id="jeu_search" name="jeu_search" placeholder="Entrer un nom" />
    <datalist id="jeu">
        <option value="Borderlands 3">
        <option value="Mario Kart 8 Deluxe">
        <option value="Xenoblade Chronicles 2">
        <option value="Cuphead">
        <option value="XCOM 2">
        <option value="Clash Royale">
    </datalist>
    <button type="submit" id="btn-search">rechercher</button>
</form>

<form action="reponse_recherche.php" class="form2" data-parsley-validate>
    <h2>Recherche avancé</h2>
    <div class="textbox">
        <i>€</i>
        <input type="number" placeholder="prix minimum" id="prix_min" name="prix_min" data-parsley-type="number">
    </div>
    <div class="textbox">
        <i>€</i>
        <input type="number" placeholder="prix maximum" id="prix_max" name="prix_max" data-parsley-type="number">
    </div>
    <div class="textbox">
    <i class="fa-brands fa-dev"></i>
        <input type="text" placeholder="studio de développement" id="stud_dev" name="stud_dev">
    </div>
    <input type="submit" value="Rechercher" id="btn-last">
</form>