<?php

function inserer_Gest_modele($db, $pass_hache)
{
    $insererGest = $db->prepare('INSERT INTO gestionnaire(Nom, Prenom, RIB, Email, Mdp, isAdmin) VALUES(:nom, :prenom, :RIB, :email, :mdp, 0)');

    $insererGest->bindParam("nom", $_POST['nom']);
    $insererGest->bindParam("prenom", $_POST['prenom']);
    $insererGest->bindParam("RIB", $_POST['rib']);
    $insererGest->bindParam("email", $_POST['email']);
    $insererGest->bindParam("mdp", $pass_hache);
    $insererGest->execute();
    $insererGest->closeCursor();
}
