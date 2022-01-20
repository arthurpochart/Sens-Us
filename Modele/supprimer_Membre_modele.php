<?php

function supprimer_Membre_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $supprimerMembre = $db->prepare("DELETE FROM membre WHERE Email = :email");
    $supprimerMembre->bindParam('email', $_POST['email']);

    $supprimerMembre->execute();
}
