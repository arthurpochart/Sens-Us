<?php
include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/recherche_user_modele.php');
require('../Modele/inserer_Gest_modele.php');
require('../Modele/inserer_groupe_modele.php');

$resultatsGest = recherche_user_modele($db, "gestionnaire");

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['rib']) && !empty($_POST['mdp']) && !empty($_POST['mdp-confirm']) && !empty($_POST['siret'])
    && !empty($_POST['secteur']) && !empty($_POST['adresse'] && !empty($_POST['nom-groupe']))
) {
    if (!$resultatsGest) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            if ($_POST['email'] == $_POST['email-confirm']) {
                if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                    $pass_hache = sha1($_POST['mdp']);

                    inserer_Gest_modele($db, $pass_hache);

                    $resultatsGest = recherche_user_modele($db, "gestionnaire");
                    $id = $resultatsGest['GestId'];

                    try {
                        //prepare la query pour les donées servant a creer le groupe
                        $classinit = 0;
                        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        $shfl = str_shuffle($comb);
                        $code = substr($shfl, 0, 8);

                        inserer_groupe_modele($db, $classinit, $code, $id);

                        header('Location: ../Vue/login_vue.php');
                    } catch (Exception $e) {
                        phpAlert("Erreur de creation de groupe");
                    }
                } else {
                    phpAlert("Les mots de passe sont différents.");
                }
            } else {
                phpAlert("Les adresses mails sont différentes.");
            }
        } else {
            phpAlert("L'adresse email n'est pas valide");
        }
    } else {
        phpAlert('Le mail ' . $_POST['email'] . ' est déjà pris !');
    }
} else {
    phpAlert("Tous les champs ne sont pas remplis.");
}
