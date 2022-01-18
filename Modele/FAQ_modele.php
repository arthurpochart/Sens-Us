<?php

function FAQ_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $reponsesFAQ = $db->prepare('SELECT * FROM faq');
    $reponsesFAQ->execute();

    $resultatsFAQ = $reponsesFAQ->fetchAll();
    return $resultatsFAQ;
}
