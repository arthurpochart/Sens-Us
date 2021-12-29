<?php

function savoirsilogGest()
{
    session_start();
    $connecteGest = false;

    if ((isset($_SESSION['GestId'])) && isset($_SESSION['email'])) {
        $connecteGest = true;
    }

    return $connecteGest;
}
