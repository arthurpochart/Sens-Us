<?php

require('../Modele/FAQ_modele.php');

session_start();

$resultatsFAQ = FAQ_modele();

require('../Vue/FAQ_vue.php');
