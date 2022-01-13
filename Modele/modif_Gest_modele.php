<?php

function modif_Gest_modele($db, $GestId)
{
    $modifGest = $db->prepare('UPDATE gestionnaire SET Nom=:nom, Prenom=:prenom, Email=:email, RIB=:rib WHERE GestId=:gestid');
    $modifGest->bindParam(':gestid', $GestId);
    $modifGest->bindParam(':nom', $_POST['nom']);
    $modifGest->bindParam(':prenom', $_POST['prenom']);
    $modifGest->bindParam(':rib', $_POST['rib']);
    $modifGest->bindParam(':email', $_POST['email']);

    $modifGest->execute();
    $modifGest->closeCursor();
}
