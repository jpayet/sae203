<?php
    require 'debut_html.inc.php';
    require 'header.inc.php';
?>

<h1>Rechercher un jeu</h1>


<form action="reponse_recherche.php" data-parsley-validate>
    <label for="real">Entrez le nom d'un jeu :</label>
    <input type="search" list="jeu" id="jeu_search" name="jeu_search" />
    <datalist id="jeu">
        <option value="Borderlands 3">
        <option value="Mario Kart 8 Deluxe">
        <option value="Xenoblade Chronicles 2">
        <option value="Cuphead">
        <option value="XCOM 2">
        <option value="Clash Royale">
    </datalist>
    <label for="prix_max">Prix maximum :</label>
    <input type="text" id="prix_max" name="prix_max" data-parsley-type="number">
    <input type="submit" value="Rechercher" id="submit">
</form>