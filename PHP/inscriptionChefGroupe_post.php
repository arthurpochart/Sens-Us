<?php
include "connect_to_db.php";
$db = dbConnect();


// On exécute une requête qui permettra de vérifier que l'email n'est pas déjà pris dans la bdd
$reponses = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email');
$reponses->bindParam(':email', $_POST['email']);
$reponses->execute();
$donnees = $reponses->fetch();

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['rib']) && (!empty($_POST['mdp'])) && (!empty($_POST['mdp-confirm']))
) {
    if (!$donnees['GestId']) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            $email = $_POST["email"];
            $reponses->closeCursor();
            if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                $pass_hache = sha1($_POST['mdp']);
                $reponses = $db->prepare('INSERT INTO gestionnaire(Nom, Prenom, RIB, Email, Mdp) VALUES(:nom, :prenom, :RIB, :email, :mdp)');

                $reponses->bindParam("nom", $_POST['nom']);
                $reponses->bindParam("prenom", $_POST['prenom']);
                $reponses->bindParam("RIB", $_POST['rib']);
                $reponses->bindParam("email", $email);
                $reponses->bindParam("mdp", $pass_hache);
                $reponses->execute();
                $reponses->closeCursor();

                $reponses = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email ');
                $reponses->bindParam(':email', $email);
                $reponses->execute();

                $donnees = $reponses->fetch();
                $id = $donnees['GestId'];

                $reponses->closeCursor();

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
