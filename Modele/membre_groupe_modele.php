<?php

function membre_groupe_modele($db)
{
    $reponsesMembreGroupe = $db->prepare('SELECT * FROM membre WHERE GestId = :gestid');
    $reponsesMembreGroupe->bindParam(':gestid', $_SESSION['GestId']);
    $reponsesMembreGroupe->execute();

    $resultatsMembreGroupe = $reponsesMembreGroupe->fetchAll();
    return $resultatsMembreGroupe;
}
