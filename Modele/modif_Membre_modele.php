<?php

function modif_Membre_modele($db, $MembreId)
{
    $modifMembre = $db->prepare('UPDATE membre SET Nom=:nom, Prenom=:prenom, Email=:email WHERE MembreId=:membreid');
    $modifMembre->bindParam(':membreid', $MembreId);
    $modifMembre->bindParam(':nom', $_POST['nom']);
    $modifMembre->bindParam(':prenom', $_POST['prenom']);
    $modifMembre->bindParam(':email', $_POST['email']);

    $modifMembre->execute();
    $modifMembre->closeCursor();
}
