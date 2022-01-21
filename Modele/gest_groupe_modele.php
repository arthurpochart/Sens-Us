<?php

function gest_groupe_modele($db)
{
    $reponsesGest = $db->prepare('SELECT * FROM gestionnaire WHERE isAdmin = "0"');
    $reponsesGest->execute();

    $reponsesGroupe = $db->prepare('SELECT * FROM groupe WHERE GestId != :gestid');
    $reponsesGroupe->bindParam('gestid', $_SESSION['GestId']);
    $reponsesGroupe->execute();

    $reponsesMembre = $db->prepare('SELECT * FROM membre WHERE GestId != :gestid');
    $reponsesMembre->bindParam('gestid', $_SESSION['GestId']);
    $reponsesMembre->execute();

    $resultatsGest = $reponsesGest->fetchAll();
    $resultatsGroupe = $reponsesGroupe->fetchAll();
    $resultatsMembre = $reponsesMembre->fetchAll();
    return array($resultatsGest, $resultatsGroupe, $resultatsMembre);
}
