<?php

function supprimer_Groupe_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $supprimerGroupe = $db->prepare("DELETE FROM groupe WHERE Code = :code");
    $supprimerGroupe->bindParam('code', $_POST['code']);

    $supprimerGroupe->execute();
}
