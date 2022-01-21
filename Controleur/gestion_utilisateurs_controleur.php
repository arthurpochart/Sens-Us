<?php

require('../Modele/gest_groupe_modele.php');

include "../Modele/connect_to_db.php";
$db = dbConnect();

session_start();

$resultats = gest_groupe_modele($db);
$resultatsGest = $resultats[0];
$resultatsGroupe = $resultats[1];
$resultatsMembre = $resultats[2];

$resultatsGroupeGest = array();
for ($i = 0; $i < count($resultatsGroupe); $i++)
    array_push($resultatsGroupeGest, array_merge($resultatsGroupe[$i], $resultatsGest[$i]));

require('../Vue/gestion_utilisateurs_vue.php');
