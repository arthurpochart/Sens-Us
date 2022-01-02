<?php

require('../Modele/profil_Gest_modele.php');

$resultats = profil_Gest_modele();
$resultatsGest = $resultats[0];
$resultatsGroupe = $resultats[1];

require('../Vue/profil_Gest_vue.php');
