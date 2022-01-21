<?php

function supprimer_Gest_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $supprimerGest = $db->prepare("DELETE FROM gestionnaire WHERE Email = :email");
    $supprimerGest->bindParam('email', $_POST['email']);

    $supprimerGest->execute();
}
