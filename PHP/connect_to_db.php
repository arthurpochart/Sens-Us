<?php

$user = 'root';
$pass = '';

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=db;charset=utf8', 'root', '');
        foreach ($db->query('SELECT * from FOO') as $row) {
            print_r($row);
        }
        $db = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
