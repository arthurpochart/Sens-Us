<?php
include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require("../Modele/recuperer_trame_modele.php");

$resultatTrame = recuperer_trame_modele($db);

require("../Vue/espace_Gest_vue.php");
