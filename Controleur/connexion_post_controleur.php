<?php

require "../Modele/connect_to_db.php";
$db = dbConnect();

require('../Modele/connexion_modele.php');

$mdp_hache = sha1($_POST['mdp']);
$resultats = connexion_modele($db, $mdp_hache);
$resultatsGest = $resultats[0];
$resultatsMembre = $resultats[1];

if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    if ($resultatsGest != false && $resultatsMembre != false) {
        echo "Votre identifiant ou votre mot de passe est incorrect !";
    } else {
        session_start();
        $_SESSION['GestId'] = $resultatsGest['GestId'];
        $_SESSION['MembreId'] = $resultatsMembre['MembreId'];
        $_SESSION['email'] = $_POST['email'];
        header('Location: ../index.php');
    }
} else {
    echo "Vos champs sont vides.";
}
