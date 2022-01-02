<?php

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/recherche_user_modele.php');
require('../Modele/inserer_Membre_modele.php');
require('../Modele/recherche_groupe_modele.php');

$resultatsMembre = recherche_user_modele($db, "membre");

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['mdp']) && !empty($_POST['mdp-confirm']) && !empty($_POST['code'])
) {
    if (!$resultatsMembre) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                $resultatsGroupe = recherche_groupe_modele($db);
                if ($resultatsGroupe != false) {
                    $groupeid = intval($resultatsGroupe['GroupeId']);
                    $gestid = intval($resultatsGroupe['GestId']);

                    $pass_hache = sha1($_POST['mdp']);

                    inserer_Membre_modele($db, $pass_hache, $groupeid, $gestid);

                    $resultatsMembre = recherche_user_modele($db, "membre");

                    header('Location: ../Vue/login_vue.php');
                } else {
                    echo "Mauvais code du groupe";
                }
            } else {
                echo "Les mots de passe sont différents.";
            }
        } else {
            echo "L'adresse email n'est pas valide";
        }
    } else {
        echo 'Le mail ' . $_POST['email'] . ' est déjà pris !';
    }
} else {
    echo "Tous les champs ne sont pas remplis.";
}
