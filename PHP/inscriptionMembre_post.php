<?php
include "connect_to_db.php";
$db = dbConnect();

$reponsesMembre = $db->prepare('SELECT MembreId FROM membre WHERE Email = :email');
$reponsesMembre->bindParam('email', $_POST['email']);
$reponsesMembre->execute();
$donnees = $reponsesMembre->fetch();

if (
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) &&
    !empty($_POST['mdp']) && !empty($_POST['mdp-confirm']) && !empty($_POST['code'])
) {
    if (!$donnees) {
        if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
            $email = $_POST["email"];
            $reponsesMembre->closeCursor();
            if ($_POST['mdp'] == $_POST['mdp-confirm']) {
                $rechercheGroupe = $db->prepare('SELECT GroupId,GestId FROM groupe WHERE Code = :code');
                $rechercheGroupe->bindParam('code', $_POST['code']);
                $rechercheGroupe->execute();
                $donneesMembre = $rechercheGroupe->fetch();
                if ($donneesMembre != false) {
                    $groupid = intval($donneesMembre['GroupId']);
                    $gestid = intval($donneesMembre['GestId']);

                    $pass_hache = sha1($_POST['mdp']);

                    $reponsesMembre = $db->prepare('INSERT INTO membre(Nom, Prenom, Email, Mdp, GroupId, GestId) VALUES(:nom, :prenom, :email, :mdp, :groupid, :gestid)');

                    $reponsesMembre->bindParam("nom", $_POST['nom']);
                    $reponsesMembre->bindParam("prenom", $_POST['prenom']);
                    $reponsesMembre->bindParam("email", $email);
                    $reponsesMembre->bindParam("mdp", $pass_hache);
                    $reponsesMembre->bindParam("groupid", $groupid);
                    $reponsesMembre->bindParam("gestid", $gestid);
                    $reponsesMembre->execute();
                    $reponsesMembre->closeCursor();

                    $reponsesMembre = $db->prepare('SELECT MembreId FROM membre WHERE Email = :email ');
                    $reponsesMembre->bindParam(':email', $email);
                    $reponsesMembre->execute();

                    $donnees = $reponsesMembre->fetch();
                    $id = $donnees['MembreId'];

                    $reponsesMembre->closeCursor();
                    header('Location: login.php');
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
