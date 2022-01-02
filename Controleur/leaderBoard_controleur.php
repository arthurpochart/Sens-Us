<?php

function classement_sort($groupe1, $groupe2)
{
    return $groupe1["Classement"] - $groupe2["Classement"];
}

require('../Modele/leaderBoard_modele.php');

$resultatsGroupe = leaderBoard_modele();
usort($resultatsGroupe, "classement_sort");

require('../Vue/leaderBoard_vue.php');
