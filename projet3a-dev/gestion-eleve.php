<?php

session_start();


if(isset($_SESSION['id_master'])){

include "vue/master/gestion-eleve.php";

}

else header('Location: login.php');

?>