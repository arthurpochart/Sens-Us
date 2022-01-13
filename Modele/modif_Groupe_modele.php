<?php

function modif_Groupe_modele($db, $GroupeId)
{
    $modifGroupe = $db->prepare('UPDATE groupe SET NomGroupe=:nomgroupe, SIRET=:siret, Secteur=:secteur, Adresse=:adresse WHERE GroupeId=:groupeid');
    $modifGroupe->bindParam(':groupeid', $GroupeId);
    $modifGroupe->bindParam(':nomgroupe', $_POST['nomGroupe']);
    $modifGroupe->bindParam(':siret', $_POST['siret']);
    $modifGroupe->bindParam(':secteur', $_POST['secteur']);
    $modifGroupe->bindParam(':adresse', $_POST['adresse']);

    $modifGroupe->execute();
    $modifGroupe->closeCursor();
}
