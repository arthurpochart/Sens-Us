<?php

require('../Modele/profil_Gest_modele.php');
require('../Modele/membre_groupe_modele.php');

include "../Modele/connect_to_db.php";
$db = dbConnect();

session_start();

$resultats = profil_Gest_modele($db);
$resultatsGest = $resultats[0];
$resultatsGroupe = $resultats[1];

$resultatsMembreGroupe = membre_groupe_modele($db);

require('../Vue/profil_Gest_vue.php');
