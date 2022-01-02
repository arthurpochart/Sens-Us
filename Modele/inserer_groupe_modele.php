<?php

function inserer_groupe_modele($db, $classementInitial, $codeGroupe, $gestId)
{
    $insererGroupe = $db->prepare('INSERT INTO groupe(NomGroupe, SIRET, Secteur, Adresse, Classement, Code, GestId) VALUES(:nomgroupe, :siret, :secteur, :adresse, :classement, :code, :gestid)');
    $insererGroupe->bindParam("nomgroupe", $_POST['nom-groupe']);
    $insererGroupe->bindParam("siret", $_POST['siret']);
    $insererGroupe->bindParam("secteur", $_POST['secteur']);
    $insererGroupe->bindParam("adresse", $_POST['adresse']);
    $insererGroupe->bindParam("classement", $classementInitial);
    $insererGroupe->bindParam("code", $codeGroupe);
    $insererGroupe->bindParam("gestid", $gestId);
    $insererGroupe->execute();
    $insererGroupe->closeCursor();
}
