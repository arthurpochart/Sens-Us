<?php

require('../Modele/profil_Membre_modele.php');

$resultats = profil_Membre_modele();
$resultatsMembre = $resultats[0];
$resultatsGroupe = $resultats[1];

require('../Vue/profil_Membre_vue.php');
