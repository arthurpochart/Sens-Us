<?php

function savoirsilog()
{
    session_start();
    $connecte = false;

    if ((isset($_SESSION['GestId']) || isset($_SESSION['MembreId'])) && isset($_SESSION['email'])) {
        $connecte = true;
    }

    return $connecte;
}
