<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=sensus;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
