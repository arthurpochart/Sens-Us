<?php

function recuperer_trame_modele($db)
{
    $recupererTrame = $db->prepare("SELECT TrameId, TypeCapteur, NumeroCapteur, Valeur, Horodatage FROM donnee");
    $recupererTrame->execute();
    $resultatTrame = $recupererTrame->fetch();

    return $resultatTrame;
}
