<?php

function supprimer_Gest_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $supprimerGest = $db->prepare("DELETE FROM gestionnaire WHERE GestId = :gestid");
    $supprimerGest->bindParam('gestid', $_POST['gestid']);

    $supprimerGest->execute();
}
