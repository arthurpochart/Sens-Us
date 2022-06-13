<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=herogu.garageisep.com;dbname=00p4tnpaKt_sensus;charset=utf8', 'jW5KoIfz8t_sensus', 'flbvkeHjeXIQwgMG');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
