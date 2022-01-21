<?php

function savoirsilogGest()
{
    $connecteGest = false;

    if ((isset($_SESSION['GestId'])) && isset($_SESSION['email']) && $_SESSION['isAdmin'] ==  "0") {
        $connecteGest = true;
    }

    return $connecteGest;
}
