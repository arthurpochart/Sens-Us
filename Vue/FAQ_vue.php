<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/FAQ.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>FAQ</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <?php
    if (count($_SESSION) !== 0) {
        if ($_SESSION['isAdmin'] == 1) {
            require "FAQ_ajout_vue.php";
        }
    }
    ?>
    <div id="titre">
        <h2>La FAQ</h2>
    </div>
    <?php
    for ($i = 0; $i < count($resultatsFAQ); $i++) {
    ?>
        <section class="faq-section">
            <input type="checkbox" id="q<?= $i ?>">
            <label for="q<?= $i ?>"><?= $resultatsFAQ[$i]['Question'] ?></label>
            <p><?= $resultatsFAQ[$i]['Reponse'] ?></p>
        </section>
    <?php }
    ?>

</body>

</html>