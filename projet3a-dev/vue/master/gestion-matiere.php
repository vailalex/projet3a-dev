<div>

gestion matières
</div><br />

<a href="accueil.php">retour</a>
<a href="" id="affiche_ajout_prof">Ajouter une matière</a><br />

<div id="form_ajout_prof">
<h2>Ajouter une matière</h2>
<form method="POST">

	<input id="nom_matiere" type="text" name="nom_matiere" placeholder="Matière"><br>



	<input type="submit" id="bouton_ajout_matiere" name="bouton_ajout_matiere">


<table id="tableau_matiere">

	<tr>
		<th>Nom matière</th>

		<th>Supprimer une matière</th>
	</tr>

	<?php
	include "modele/master/affiche-matiere.php";
	?>

</table>

<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/master/script-gestion-matiere.js"></script> 