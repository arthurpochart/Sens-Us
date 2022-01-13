<?php

include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/recherche_user_modele.php');
require('../Modele/modif_Membre_modele.php');

session_start();
$resultatsMembre = recherche_user_modele($db, "membre");

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
) {
    if (!$resultatsMembre || $_POST['email'] == $_SESSION['email']) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            modif_Membre_modele($db, $_SESSION['MembreId']);

            $_SESSION['email'] = $_POST['email'];
            header('Location: profil_Membre_controleur.php');
        } else {
            phpAlert("L'adresse email n'est pas valide");
        }
    } else {
        phpAlert('Le mail ' . $_POST['email'] . ' est déjà pris !');
    }
} else {
    phpAlert("Tous les champs ne sont pas remplis.");
}
