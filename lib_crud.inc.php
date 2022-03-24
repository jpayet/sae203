<?php

  require 'secretxyz123.inc.php';

//CONNEXION ET DECONNEXION

  function connexionBD()
  {
    
    $mabd = null;
    try {
      // on essaie de se connecter
      // le port et le dbname ci-dessous sont À ADAPTER à vos données
      $mabd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=sae203;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
      // on passe le codage en utf-8
      $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
    }
    // on retourne la variable de connexion
    return $mabd;
  }

   // déconnexion de la base de données
   function deconnexionBD(&$mabd) {
    // on se déconnexte en mettant la variable de connexion à null 
    $mabd=null;
  }

//PAGE CATALOGUE

  // affichage du catalogue 
  function afficherCatalogue($mabd) {
    $req = "SELECT * FROM jeux_video 
            INNER JOIN stud_developpement 
            ON jeux_video._stud_id=stud_developpement.stud_id";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // ICI VOTRE CODE POUR AFFICHER LES ALBUMS
    echo '<div class="pcp">';
      foreach ($resultat as $value) {

          echo '<div class="infobdd">' ;
          echo '<h3>'.$value['jv_titre'] . '</h3>';
          echo '<img class="image" src="'.$value['jv_photo'].'"> <br>';
          echo '<br> <p>Prix: ' . $value['jv_prix'] . '€ </p>';
          echo '<p class="sortie"> Date de sortie : <span>' . $value['jv_annee_sortie'] .'</span></p>';
          echo '<p class="notelist">Note: ' . $value['jv_note'] .'</p>';
          echo '<p class="stud_dev"> Studio de developpement: <span>' . $value['stud_nom']. '</span></p>';
          echo '<p class="fondateurs"> Fondateur(s) : ' .$value['stud_fondateur']. ' ; ' .$value['stud_co_fondateur']. '</p>'; 
          echo '</div>';  
      }
    echo '</div>';
  }

//ADMIN PAGE 1 (JEUX VIDEO)

  // affichage de la liste des BDs pour la gestion
  function afficherListe($mabd) {
      $req = "SELECT * FROM jeux_video 
              INNER JOIN stud_developpement 
              ON jeux_video._stud_id=stud_developpement.stud_id";
      try {
          $resultat = $mabd->query($req);
      } catch (PDOException $e) {
          // s'il y a une erreur, on l'affiche
          echo '<p>Erreur : ' . $e->getMessage() . '</p>';
          die();
      }
      echo '<table>'."\n";
      echo '<thead><tr><th>Photo</th><th>Titre</th><th>Année de sortie</th><th>Note</th><th>Prix (&euro;)</th><th>Disponibilité mobile</th><th>Multiplateformes</th><th>Studio</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
      echo '<tbody>'."\n";
      foreach ($resultat as $value) {
          echo '<tr>'."\n";
          echo '<td><img class="photo" src="../'.$value['jv_photo'].'" alt="image_'.$value['jv_titre'].'" /></td>'."\n";
          echo '<td>'.$value['jv_titre'].'</td>'."\n";
          echo '<td>'.$value['jv_annee_sortie'].'</td>'."\n";
          echo '<td>'.$value['jv_note'].'</td>'."\n";
          echo '<td>'.$value['jv_prix'].'</td>'."\n";
          echo '<td>'.$value['jv_disponibilite_mobile'].'</td>'."\n";
          echo '<td>'.$value['jv_multiplateformes'].'</td>'."\n";
          echo '<td>'.$value['stud_nom'].'</td>'."\n";
          echo '<td><a href="table1_update_form.php?num='.$value['jv_id'].'">Modifier</a></td>'."\n";
          echo '<td><a href="table1_delete.php?num='.$value['jv_id'].'">Supprimer</a></td>'."\n";
          echo '</tr>'."\n";
      }
      echo '</tbody>'."\n";
      echo '</table>'."\n";
  }


  // afficher les auteurs (prénom et nom) dans des champs "option"
  function afficherStudio($mabd) {
    // on sélectionne tous les auteurs de la table auteurs
      $req = "SELECT * FROM stud_developpement";
      try {
          $resultat = $mabd->query($req);
      } catch (PDOException $e) {
          // s'il y a une erreur, on l'affiche
          echo '<p>Erreur : ' . $e->getMessage() . '</p>';
          die();
      }
      // pour chaque auteur, on met son id, son prénom et son nom 
      // dans une balise <option>
      foreach ($resultat as $value) {
          echo '<option value="'.$value['stud_id'].'">'; // id 
          echo $value['stud_nom']; 
          echo '</option>'."\n";
      }
  }

  function ajouterJeux($mabd, $titre, $annee, $nouvelleImage, $note,  $prix, $dispo, $multi, $studio){
        $req = 'INSERT INTO jeux_video (jv_titre, jv_annee_sortie, jv_photo, jv_note, jv_prix, jv_disponibilite_mobile, jv_multiplateformes, _stud_id) VALUES ("'.$titre.'", "'.$annee.'", "img/uploads/'.$nouvelleImage.'", "'.$note.'/20", '.$prix.', "'.$dispo.'", "'.$multi.'", '.$studio.')';
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p>Le jeux vidéo ' . $titre . ' a été ajoutée au catalogue.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
            die();
        }
  }

  function effaceBD($mabd, $id) {
    $req = 'DELETE FROM jeux_video WHERE jv_id='.$id.'';
    //echo '<p>'.$req.'</p>'."\n";
    try{
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount()==1) {
        echo '<p>La bande dessinée '.$id.' a été supprimée du catalogue.</p>'."\n";
    } else {
        echo '<p>Erreur lors de la suppression.</p>'."\n";
        die();
    }
  }

  // fonction de récupération des informations d'une BD
  function getBD($mabd, $idAlbum) {
      $req = 'SELECT * FROM jeux_video WHERE jv_id='.$idAlbum;
      //echo '<p>GetBD() : '.$req.'</p>'."\n";
      try {
          $resultat = $mabd->query($req);
      } catch (PDOException $e) {
          // s'il y a une erreur, on l'affiche
          echo '<p>Erreur : ' . $e->getMessage() . '</p>';
          die();
      }
      // la fonction retourne le tableau associatif 
      // contenant les champs et leurs valeurs
      return $resultat->fetch();
    }

	// afficher le "bon" auteur parmi les auteurs (prénom et nom)
   // dans les balises "<option>"
	function afficherStudioSelectionne($mabd, $idAuteur) {
        $req = "SELECT * FROM stud_developpement";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<option value="'.$value['stud_id'].'"';
            if ($value['stud_id']==$idAuteur) {
                echo ' selected="selected"';
            }
            echo '>';
            echo $value['stud_nom'];
            echo '</option>'."\n";
        }
    }

	// fonction de modification d'une BD dans la table bande_dessinees
    function modifierBD($mabd, $id, $titre, $annee, $nouvelleImage, $note,  $prix, $dispo, $multi, $studio)
    {
        $req = 'UPDATE jeux_video 
                SET jv_titre="'.$titre.'", jv_annee_sortie="'.$annee.'", jv_photo="img/uploads/'.$nouvelleImage.'", jv_note="'.$note.'/20", jv_prix='.$prix.', jv_disponibilite_mobile="'.$dispo.'", jv_multiplateformes="'.$multi.'", _stud_id='.$studio.' 
                WHERE jv_id='.$id;
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p>La bande dessinée ' . $titre . ' a été modifiée.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }

//PAGE 2 (STUDIO)

    function afficherTableSudio($mabd) {
        $req = "SELECT * FROM stud_developpement";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        echo '<table>'."\n";
        echo '<thead><tr><th>Nom</th><th>Date de création</th><th>Fondateur</th><th>Co-fondateur</th><th>Siege social (ville)</th><th>Siege social (pays)</th></th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
        echo '<tbody>'."\n";
        foreach ($resultat as $value) {
            echo '<tr>'."\n";
            echo '<td>'.$value['stud_nom'].'</td>'."\n";
            echo '<td>'.$value['stud_date_creation'].'</td>'."\n";
            echo '<td>'.$value['stud_fondateur'].'</td>'."\n";
            echo '<td>'.$value['stud_co_fondateur'].'</td>'."\n";
            echo '<td>'.$value['stud_siege_social_ville'].'</td>'."\n";
            echo '<td>'.$value['stud_siege_social_pays'].'</td>'."\n";
            echo '<td><a href="table2_update_form.php?num='.$value['stud_id'].'">Modifier</a></td>'."\n";
            echo '<td><a href="table2_delete.php?num='.$value['stud_id'].'">Supprimer</a></td>'."\n";
            echo '</tr>'."\n";
        }
        echo '</tbody>'."\n";
        echo '</table>'."\n";
    }

    function ajouterStudio($mabd, $nom, $date, $fonda, $cofonda, $scville, $scpays){
        $req = 'INSERT INTO stud_developpement (stud_nom, stud_date_creation, stud_fondateur, stud_co_fondateur, stud_siege_social_ville, stud_siege_social_pays) VALUES ("'.$nom.'", "'.$date.'", "'.$fonda.'", "'.$cofonda.'", "'.$scville.'", "'.$scpays.'")';
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p>Le studio ' . $nom . ' a été ajoutée au catalogue.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
            die();
        }
    }

    function effaceStud($mabd, $id) {
        $req = 'DELETE FROM stud_developpement WHERE stud_id='.$id.'';
        //echo '<p>'.$req.'</p>'."\n";
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<p>Le studio de dev '.$id.' a été supprimée du catalogue.</p>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }

    function getStud($mabd, $idStud) {
        $req = 'SELECT * FROM stud_developpement WHERE stud_id='.$idStud;
        //echo '<p>GetBD() : '.$req.'</p>'."\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // la fonction retourne le tableau associatif 
        // contenant les champs et leurs valeurs
        return $resultat->fetch();
    }

    function modifierStud($mabd, $id, $nom, $date, $fondateur, $co_fondateur,  $scville, $scpays)
    {
        $req = 'UPDATE stud_developpement 
                SET stud_nom="'.$nom.'", stud_date_creation="'.$date.'", stud_fondateur="'.$fondateur.'", stud_co_fondateur="'.$co_fondateur.'", stud_siege_social_ville="'.$scville.'", stud_siege_social_pays="'.$scpays.'" 
                WHERE stud_id='.$id;
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p>Le studio ' . $nom . ' a été modifié.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }

    // Génération de la liste des auteurs dans le formulaire de recherche
    function genererDatalistJeux($mabd) {
        // on sélectionne le nom et prénom de tous les auteurs de la table auteurs
        $req = "SELECT jv_titre FROM jeux_video";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // pour chaque auteur, on met son nom et prénom dans une balise <option>
        foreach ($resultat as $value) {
            echo '<option value="'. $value['jv_titre'] .'">'; 
        } 
    }

    // affichage des resultats de recherche
    function afficherResultatRecherche($mabd) {
        $res=htmlspecialchars($_GET['texte']);
        $req = "SELECT * FROM jeux_video 
                INNER JOIN stud_developpement 
                ON jeux_video._stud_id = stud_developpement.stud_id
                WHERE jv_titre LIKE '%" . $res . "%'";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        
        // ICI VOTRE CODE POUR AFFICHER LES ALBUMS FILTRES
        echo '<div class="pcp">';
            foreach ($resultat as $value) {
                echo '<div class="infobdd">' ;
                echo '<h3>'.$value['jv_titre'] . '</h3>';
                echo '<img class="image" src="'.$value['jv_photo'].'"> <br>';
                echo '<br> <p>Prix: ' . $value['jv_prix'] . '€ </p>';
                echo '<p class="sortie"> Date de sortie : <span>' . $value['jv_annee_sortie'] .'</span></p>';
                echo '<p class="notelist">Note: ' . $value['jv_note'] .'</p>';
                echo '<p class="stud_dev"> Studio de developpement: <span>' . $value['stud_nom']. '</span></p>';
                echo '<p class="fondateurs"> Fondateur(s) : ' .$value['stud_fondateur']. ' ; ' .$value['stud_co_fondateur']. '</p>'; 
                echo '</div>';  
            }
        echo '</div>';
    }















