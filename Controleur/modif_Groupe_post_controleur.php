<?php

include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/recherche_groupe_modele.php');
require('../Modele/modif_Groupe_modele.php');

session_start();
$resultatsGroupe = recherche_groupe_modele($db);
if (
    !empty($_POST['nomGroupe']) && !empty($_POST['siret']) && !empty($_POST['secteur']) &&
    !empty($_POST['adresse'])
) {
    if ($_POST['code'] == $resultatsGroupe['Code']) {
        modif_Groupe_modele($db, $resultatsGroupe['GroupeId']);
        header('Location: profil_Gest_controleur.php');
    } else {
        phpAlert("Vous n'avez pas le droit de changer votre code de groupe");
    }
} else {
    phpAlert("Tous les champs ne sont pas remplis.");
}
