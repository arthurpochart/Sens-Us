<?php

function inserer_Membre_modele($db, $pass_hache, $groupeId, $gestId)
{
    $insererMembre = $db->prepare('INSERT INTO membre(Nom, Prenom, Email, Mdp, GroupeId, GestId) VALUES(:nom, :prenom, :email, :mdp, :groupeid, :gestid)');

    $insererMembre->bindParam("nom", $_POST['nom']);
    $insererMembre->bindParam("prenom", $_POST['prenom']);
    $insererMembre->bindParam("email", $_POST['email']);
    $insererMembre->bindParam("mdp", $pass_hache);
    $insererMembre->bindParam("groupeid", $groupeId);
    $insererMembre->bindParam("gestid", $gestId);
    $insererMembre->execute();
    $insererMembre->closeCursor();
}
