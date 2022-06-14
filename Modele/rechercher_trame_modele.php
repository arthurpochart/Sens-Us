<?php

function rechercher_trame_modele($db, $horodatage)
{
    $verifHorodatage = $db->prepare("SELECT TrameId FROM donnee WHERE Horodatage = :horodatage");
    $verifHorodatage->bindParam(':horodatage', $horodatage);
    $verifHorodatage->execute();
    $resultatHorodatage = $verifHorodatage->fetch();

    return $resultatHorodatage;
}
