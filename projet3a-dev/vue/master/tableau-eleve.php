<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_eleve']. '</td> 
	  <td>'.$resultat['prenom_eleve'].'</td> 
	  <td>'.$resultat['moyenne_eleve'].'</td>
	  <td>'.$resultat['nbr_absence_eleve'].'</td>
	  <td>'.$resultat['nbr_retard_eleve'].'</td>
	  <td>'.$resultat['commentaire_eleve'].'</td>

	    <td><a href="bulletin.php"></td>
	  <td><a href="absences/retards.php"></td>

	  <td><input type="submit" class="affiche_modif_eleve" name='.$resultat['id_eleve'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_eleve" name='.$resultat['id_eleve'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>