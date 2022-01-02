<?php

function recherche_user_modele($db, $typeUser)
{
    if ($typeUser == "membre") {
        $reponseUser = $db->prepare('SELECT MembreId FROM membre WHERE Email = :email');
    } else {
        $reponseUser = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email');
    }

    $reponseUser->bindParam('email', $_POST['email']);
    $reponseUser->execute();

    $resultatsUser = $reponseUser->fetch();
    return $resultatsUser;
}
