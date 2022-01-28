<?php

require '../Modele/supprimer_Membre_modele.php';

supprimer_Membre_modele();
echo '<script type="text/javascript">alert("' . 'Le mail ' . $_POST['email'] . ' a bien été supprimé !' . '")</script>';
session_start();

if ($_SESSION['isAdmin'] == 1) {
    header('Location: gestion_utilisateurs_controleur.php');
} else {
    header('Location: profil_Gest_controleur.php');
}
