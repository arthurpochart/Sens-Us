<?php

function navaffichage($repertoire = "")
{
    include($repertoire . "savoirsilogGest.php");
    include($repertoire . "savoirsilogMembre.php");
    $connecteGest = savoirsilogGest();
    $connecteMembre = savoirsilogMembre();

    if ($connecteGest === true) {
        include($repertoire . "navlogGest.php");
    } elseif ($connecteMembre === true) {
        include($repertoire . "navlogMembre.php");
    } else {
        include($repertoire . "nav.php");
    }
}
