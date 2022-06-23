<?php
include "phpAlert.php";

require "../Modele/connect_to_db.php";
$db = dbConnect();

require("../Modele/recuperer_trame_modele.php");

$resultatTrame = recuperer_trame_modele($db);

function compareByTimeStamp($time1, $time2)
{
    if (strtotime($time1["Horodatage"]) < strtotime($time2["Horodatage"]))
        return 1;
    else if (strtotime($time1["Horodatage"]) > strtotime($time2["Horodatage"]))
        return -1;
    else
        return 0;
}

// sort array with given user-defined function
usort($resultatTrame, "compareByTimeStamp");

require("../Vue/espace_Gest_vue.php");
