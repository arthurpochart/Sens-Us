<?php

function FAQ_modele()
{
    require "connect_to_db.php";
    $db = dbConnect();

    $reponsesFAQ = $db->prepare('SELECT * FROM faq');
    $reponsesFAQ->execute();

    $reponsesFAQ = $reponsesFAQ->fetchAll();
    return $reponsesFAQ;
}
