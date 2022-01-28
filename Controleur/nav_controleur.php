<?php

function nav_controleur($repertoire = "../Vue/")
{
    if (!isset($_SESSION)) {
        session_start();
    }

    include("savoirsilogGest.php");
    include("savoirsilogMembre.php");
    include("savoirsilogAdmin.php");
    $connecteGest = savoirsilogGest();
    $connecteMembre = savoirsilogMembre();
    $connecteAdmin = savoirsilogAdmin();

    if ($connecteGest === true) {
        include($repertoire . "nav_Gest_vue.php");
    } elseif ($connecteMembre === true) {
        include($repertoire . "nav_Membre_vue.php");
    } elseif ($connecteAdmin === true) {
        include($repertoire . "nav_Admin_vue.php");
    } else {
        include($repertoire . "nav_deconnecte_vue.php");
    }
}
