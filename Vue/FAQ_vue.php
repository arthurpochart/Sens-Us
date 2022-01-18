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
    <div class="space">
        <hr>
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