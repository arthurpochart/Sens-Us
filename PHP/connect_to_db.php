<?php

$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost:3306;dbname=test;charset=utf8', $user, $pass);
    foreach ($db->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $db = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
