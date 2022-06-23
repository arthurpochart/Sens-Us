<?php
include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require("../Modele/recuperer_trame_modele.php");

$resultatTrame = recuperer_trame_modele($db);

var_dump($resultatTrame);

require("../Vue/espace_Membre_vue.php");
