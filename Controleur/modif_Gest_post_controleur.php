<?php

include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/recherche_user_modele.php');
require('../Modele/modif_Gest_modele.php');

session_start();
$resultatsGest = recherche_user_modele($db, "gestionnaire");

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['rib'])
) {
    if (!$resultatsGest || $_POST['email'] == $_SESSION['email']) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            modif_Gest_modele($db, $_SESSION['GestId']);

            $_SESSION['email'] = $_POST['email'];
            header('Location: profil_Gest_controleur.php');
        } else {
            phpAlert("L'adresse email n'est pas valide");
        }
    } else {
        phpAlert('Le mail ' . $_POST['email'] . ' est déjà pris !');
    }
} else {
    phpAlert("Tous les champs ne sont pas remplis.");
}
