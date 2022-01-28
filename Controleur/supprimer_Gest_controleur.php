<?php

require '../Modele/supprimer_Gest_modele.php';

supprimer_Gest_modele();
echo '<script type="text/javascript">alert("' . 'Le mail ' . $_POST['email'] . ' a bien été supprimé !' . '")</script>';

header('Location: gestion_utilisateurs_controleur.php');
