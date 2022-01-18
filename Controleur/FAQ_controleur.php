<?php

require('../Modele/FAQ_modele.php');

$resultatsFAQ = FAQ_modele();

require('../Vue/FAQ_vue.php');
