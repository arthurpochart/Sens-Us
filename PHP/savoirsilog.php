<?php

function savoirsilog()
{
    session_start();
    $connecte = false;

    if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
        $connecte = true;
    }

    return $connecte;
}
