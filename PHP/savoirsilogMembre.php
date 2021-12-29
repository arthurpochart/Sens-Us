<?php

function savoirsilogMembre()
{
    $connecteMembre = false;

    if ((isset($_SESSION['MembreId'])) && isset($_SESSION['email'])) {
        $connecteMembre = true;
    }

    return $connecteMembre;
}
