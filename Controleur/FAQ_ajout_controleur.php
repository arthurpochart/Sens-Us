<?php

include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/FAQ_ajout_modele.php');

if (!empty($_POST['question']) && !empty($_POST['reponse'])) {
    FAQ_ajout_modele($db);
    header('Location:  ../Controleur/FAQ_controleur.php');
} else {
    phpAlert("Vos champs sont vides.");
}
