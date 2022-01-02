<?php

function connexion_modele($db, $mdp_hache)
{
    $reponsesGest = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email AND Mdp = :mdp');
    $reponsesGest->bindParam(':email', $_POST['email']);
    $reponsesGest->bindParam(':mdp', $mdp_hache);
    $reponsesGest->execute();

    $reponsesMembre = $db->prepare('SELECT MembreId FROM membre WHERE Email = :email AND Mdp = :mdp');
    $reponsesMembre->bindParam(':email', $_POST['email']);
    $reponsesMembre->bindParam(':mdp', $mdp_hache);
    $reponsesMembre->execute();

    $resultatsGest = $reponsesGest->fetch();
    $resultatsMembre = $reponsesMembre->fetch();

    return array($resultatsGest, $resultatsMembre);
}
