<?php
include "connect_to_db.php";
$db = dbConnect();


// On exécute une requête qui permettra de vérifier que l'email n'est pas déjà pris dans la bdd
$reponsesGest = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email');
$reponsesGest->bindParam(':email', $_POST['email']);
$reponsesGest->execute();
$donnees = $reponsesGest->fetch();

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['rib']) && (!empty($_POST['mdp'])) && (!empty($_POST['mdp-confirm'])) && (!empty($_POST['siret']))
    && (!empty($_POST['secteur'])) &&(!empty($_POST['adresse']))
) {
    if (!$donnees['GestId']) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            $email = $_POST["email"];
            $reponsesGest->closeCursor();
            if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                $pass_hache = sha1($_POST['mdp']);
                $reponsesGest = $db->prepare('INSERT INTO gestionnaire(Nom, Prenom, RIB, Email,mdp) VALUES(:nom, :prenom, :RIB, :email, :mdp)');

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


                try{

                    //prepare la query pour les donées servant a creer le groupe
                    $classinit = 0;
                    $reponsesGroupe = $db->prepare('INSERT INTO groupe(groupid, siret, secteur, adresse, classement, gestid) VALUES(:groupid, :siret, :secteur, :adresse,:classement, :gestid)');
                    $reponsesGroupe->bindParam("siret",$_POST['siret']);
                    $reponsesGroupe->bindParam("secteur",$_POST['secteur']);
                    $reponsesGroupe->bindParam("adresse",$_POST['adresse']);
                    $reponsesGroupe->bindParam("gestid",$id);
                    $reponsesGroupe->bindParam("classement",$classinit);
                    $reponsesGroupe->execute();
                    $reponsesGroupe->closeCursor();
                }
                catch(Exception $e){
                    echo"erreur de creation de groupe";
                }
                header('Location: login.php');


            } else {
                echo "Les mots de passe sont différents.";
            }
        } else {
            echo "L'adresse email n'est pas valide";
        }
    } else {
        echo 'Le mail ' . $_POST['mail'] . ' est déjà pris !';
    }
} else {
    echo "Tous les champs ne sont pas remplis.";
}
