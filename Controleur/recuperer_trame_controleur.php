<?php

include "phpAlert.php";

require "Modele/connect_to_db.php";
var_dump("yo");

$db = dbConnect();
require "Modele/inserer_trame_modele.php";

$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G6-D"
);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
$data_tab = str_split($data, 33);
for ($i = 0, $size = count($data_tab); $i < $size; $i++) {
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    $horodatage = date("Y-m-d H:i:s", strtotime($year . "-" . $month . "-" . $day . " " . $hour . ":" . $min . ":" . $sec));
    $verifHorodatage = $db->prepare("SELECT * FROM donnee WHERE horodatage = :horodatage");
    $verifHorodatage->bindParam(':horodatage', $horodatage);
    $verifHorodatage->execute();
    $resultatHorodatage = $verifHorodatage->fetch();
    var_dump($resultatHorodatage);
    if ($resultatHorodatage == false) {
        inserer_trame_modele($db, $t, $o, $r, $c, $n, $v, $a, $x, $horodatage);
    } else {
        phpAlert("Deja dans la bdd");
    }
}
