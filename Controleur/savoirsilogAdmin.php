<?php

function savoirsilogAdmin()
{
    $connecteAdmin = false;

    if ((isset($_SESSION['GestId'])) && isset($_SESSION['email']) && $_SESSION['isAdmin'] ==  "1") {
        $connecteAdmin = true;
    }

    return $connecteAdmin;
}
