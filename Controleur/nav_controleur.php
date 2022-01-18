<?php

function nav_controleur($repertoire = "../Vue/")
{
    session_start();

    include("savoirsilogGest.php");
    include("savoirsilogMembre.php");
    $connecteGest = savoirsilogGest();
    $connecteMembre = savoirsilogMembre();

    if ($connecteGest === true) {
        include($repertoire . "nav_Gest_vue.php");
    } elseif ($connecteMembre === true) {
        include($repertoire . "nav_Membre_vue.php");
    } else {
        include($repertoire . "nav_deconnecte_vue.php");
    }
}
