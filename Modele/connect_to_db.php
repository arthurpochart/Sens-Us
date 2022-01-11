<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', 'bruxelles');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
