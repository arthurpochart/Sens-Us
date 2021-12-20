<?php
include "connect_to_db.php";
$db = dbConnect();


// On exécute une requête qui permettra de vérifier que l'email n'est pas déjà pris dans la bdd
$reponsesGest = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email');
$reponsesGest->bindParam('email', $_POST['email']);
$reponsesGest->execute();
$donnees = $reponsesGest->fetch();

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['rib']) && !empty($_POST['mdp']) && !empty($_POST['mdp-confirm']) && !empty($_POST['siret'])
    && !empty($_POST['secteur']) && !empty($_POST['adresse'])
) {
    if (!$donnees) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            $email = $_POST["email"];
            $reponsesGest->closeCursor();
            if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                $pass_hache = sha1($_POST['mdp']);

                $reponsesGest = $db->prepare('INSERT INTO gestionnaire(Nom, Prenom, RIB, Email, Mdp) VALUES(:nom, :prenom, :RIB, :email, :mdp)');

                $reponsesGest->bindParam("nom", $_POST['nom']);
                $reponsesGest->bindParam("prenom", $_POST['prenom']);
                $reponsesGest->bindParam("RIB", $_POST['rib']);
                $reponsesGest->bindParam("email", $email);
                $reponsesGest->bindParam("mdp", $pass_hache);
                $reponsesGest->execute();
                $reponsesGest->closeCursor();

                $reponsesGest = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email ');
                $reponsesGest->bindParam(':email', $email);
                $reponsesGest->execute();

                $donnees = $reponsesGest->fetch();
                $id = $donnees['GestId'];

                $reponsesGest->closeCursor();

                // Test de gueguet non fonctionnel (NE PAS EFFACER MERCI)
                // $destinataire = $email;
                // $sujet = "Activer votre compte";
                // $entete = "From: gauthier-il@hotmail.fr";
                // $message = 'Bienvenue sur Sens\'Us,
                // Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
                // ou copier/coller dans votre navigateur Internet.

                // http://localhost/Sens-Us/PHP/activation.php?log=' . urlencode($email) . '&cle=' . urlencode($cle) . '


                // ---------------
                // Ceci est un mail automatique, Merci de ne pas y répondre.';

                // mail($destinataire, $sujet, $message, $entete);

                try {
                    //prepare la query pour les donées servant a creer le groupe
                    $classinit = 0;
                    $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $shfl = str_shuffle($comb);
                    $code = substr($shfl, 0, 8);

                    $reponsesGroupe = $db->prepare('INSERT INTO groupe(SIRET, Secteur, Adresse, Classement, Code, Gestid) VALUES(:siret, :secteur, :adresse, :classement, :code, :gestid)');
                    $reponsesGroupe->bindParam("siret", $_POST['siret']);
                    $reponsesGroupe->bindParam("secteur", $_POST['secteur']);
                    $reponsesGroupe->bindParam("adresse", $_POST['adresse']);
                    $reponsesGroupe->bindParam("classement", $classinit);
                    $reponsesGroupe->bindParam("code", $code);
                    $reponsesGroupe->bindParam("gestid", $id);
                    $reponsesGroupe->execute();
                    $reponsesGroupe->closeCursor();
                    header('Location: login.php');
                } catch (Exception $e) {
                    echo "Erreur de creation de groupe";
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
