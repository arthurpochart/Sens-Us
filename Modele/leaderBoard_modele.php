<?php

function leaderBoard_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $reponsesGroupe = $db->prepare('SELECT * FROM groupe');
    $reponsesGroupe->execute();

    $resultatsGroupe = $reponsesGroupe->fetchAll();
    return $resultatsGroupe;
}
