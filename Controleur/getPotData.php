<?php

$mysqli = new mysqli("herogu.garageisep.com", "jW5KoIfz8t_sensus", "flbvkeHjeXIQwgMG", "00p4tnpaKt_sensus");
if($mysqli->connect_error) {
    exit('Could not connect');
}

$sql = "select *from donnee WHERE NumeroCapteur = ? ORDER BY TrameId DESC LIMIT 1;";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($trameId, $typeTrame, $numObjet, $typeReq, $typeCapteur, $numCapteur, $valeur,$numTrame,$checksum,$horodatage);
$stmt->fetch();
$stmt->close();

echo $valeur;
