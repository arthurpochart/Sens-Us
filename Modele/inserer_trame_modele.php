<?php

function inserer_trame_modele($db, $t, $o, $r, $c, $n, $v, $a, $x, $horodatage)
{
    $insererTrame = $db->prepare('INSERT INTO donnee(TypeTrame, NumeroObjet, TypeRequete, TypeCapteur, NumeroCapteur, Valeur, NumeroTrame, Chcksum, Horodatage) VALUES(:typetrame, :numeroobjet, :typerequete, :typecapteur, :numerocapteur, :valeur, :numerotrame, :chcksum, :horodatage)');
    $insererTrame->bindParam("typetrame", $t);
    $insererTrame->bindParam("numeroobjet", $o);
    $insererTrame->bindParam("typerequete", $r);
    $insererTrame->bindParam("typecapteur", $c);
    $insererTrame->bindParam("numerocapteur", $n);
    $insererTrame->bindParam("valeur", $v);
    $insererTrame->bindParam("numerotrame", $a);
    $insererTrame->bindParam("chcksum", $x);
    $insererTrame->bindParam("horodatage", $horodatage);
    $insererTrame->execute();
    $insererTrame->closeCursor();
}
