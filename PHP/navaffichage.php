<?php

function navaffichage()
{
    include "PHP/savoirsilog.php";
    $connecte = savoirsilog();

    if ($connecte === true) {
        include "PHP/navlog.php";
    } else {
        include "PHP/nav.php";
    }
}
