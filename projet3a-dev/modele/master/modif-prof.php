<?php

include ("connect-bdd.php");


$nom_prof_modif=$_POST["nom_prof_modif"];
$prenom_prof_modif=$_POST["prenom_prof_modif"];
$mail_prof_modif=$_POST["mail_prof_modif"];
$mdp_prof_modif=$_POST["mdp_prof_modif"];


$matiere_prof_modif=$_POST["matiere_prof_modif"];

$eta_prof= $_SESSION['nom_eta_master'];
$id_prof= $_POST['id_prof'];



$requete = $connexion->prepare ("UPDATE sl_prof
SET nom_prof = :nom_prof_modif, prenom_prof = :prenom_prof_modif, mail_prof = :mail_prof_modif, mdp_prof = :mdp_prof_modif,
	matiere_prof = :matiere_prof_modif
WHERE eta_prof = :eta_prof AND id_prof = :id_prof");

$requete->bindParam(':nom_prof_modif', $nom_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':prenom_prof_modif', $prenom_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':mail_prof_modif', $mail_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':mdp_prof_modif', $mdp_prof_modif, PDO::PARAM_INT);

$requete->bindParam(':matiere_prof_modif', $matiere_prof_modif, PDO::PARAM_INT);

$requete->bindParam(':eta_prof', $eta_prof, PDO::PARAM_INT);
$requete->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);





$requete->execute();


/*header("Location:../gestion-prof.php");*/

?>