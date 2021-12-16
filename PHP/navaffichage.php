<?php

function navaffichage($repertoire = "")
{
    include($repertoire . "savoirsilog.php");
    $connecte = savoirsilog();

    if ($connecte === true) {
        include($repertoire . "navlog.php");
    } else {
        include($repertoire . "nav.php");
    }
}
