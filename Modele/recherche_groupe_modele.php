<?php

function recherche_groupe_modele($db)
{
    $rechercheGroupe = $db->prepare('SELECT GroupeId, GestId, Code FROM groupe WHERE Code = :code');
    $rechercheGroupe->bindParam('code', $_POST['code']);
    $rechercheGroupe->execute();

    $resultatsGroupe = $rechercheGroupe->fetch();
    return $resultatsGroupe;
}
