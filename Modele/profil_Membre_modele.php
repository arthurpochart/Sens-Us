<?php

function profil_Membre_modele()
{
    include "connect_to_db.php";
    $db = dbConnect();

    session_start();

    $reponsesMembre = $db->prepare('SELECT Nom, Prenom, Email FROM membre WHERE MembreId = :membreid');
    $reponsesMembre->bindParam('membreid', $_SESSION['MembreId']);

    $reponsesGroupe = $db->prepare('SELECT NomGroupe, SIRET, Secteur, Adresse, Code FROM groupe JOIN membre ON groupe.GroupeId = membre.GroupeId AND membre.MembreId = :membreid');
    $reponsesGroupe->bindParam('membreid', $_SESSION['MembreId']);

    $reponsesMembre->execute();
    $reponsesGroupe->execute();

    $resultatsMembre = $reponsesMembre->fetch();
    $resultatsGroupe = $reponsesGroupe->fetch();

    return array($resultatsMembre, $resultatsGroupe);
}
