<?php

function profil_Gest_modele($db)
{
    $reponsesGest = $db->prepare('SELECT GestId, RIB, Nom, Prenom, Email FROM gestionnaire WHERE GestId = :gestid');
    $reponsesGest->bindParam('gestid', $_SESSION['GestId']);

    $reponsesGroupe = $db->prepare('SELECT GroupeId, NomGroupe, SIRET, Secteur, Adresse, Code, GestId FROM groupe WHERE GestId = :gestid');
    $reponsesGroupe->bindParam('gestid', $_SESSION['GestId']);

    $reponsesGest->execute();
    $reponsesGroupe->execute();

    $resultatsGest = $reponsesGest->fetch();
    $resultatsGroupe = $reponsesGroupe->fetch();

    return array($resultatsGest, $resultatsGroupe);
}
