<?php

function savoirsilogGest()
{
    $connecteGest = false;

    if ((isset($_SESSION['GestId'])) && isset($_SESSION['email'])) {
        $connecteGest = true;
    }

    return $connecteGest;
}
