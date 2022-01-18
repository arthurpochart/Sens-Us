<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Inscripition</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <div class="header">
        <h1>Création de compte</h1>
        <p>Veuillez suivre les étapes suviant votre profil</p>
        <p>Si votre entreprise a déjà un compte, devenez membre de groupe</p>
    </div>

    <div class="carte-contenu">
        <a href="inscription_Membre_vue.php" class="lienVersForm">
            <div class="dropBtn">
                <h2>Compte Membre</h2>
                <p>Bénéficier de toutes les fonctionnalités Sens'Cert</p>
                <hr>
            </div>
        </a>
    </div>

    <div class="carte-contenu">
        <a href="inscription_Gest_vue.php" class="lienVersForm">
            <div class="dropBtn">
                <h2>Compte Chef de Groupe</h2>
                <p>Enregistrer votre espace de travail dans le projet Sens'Cert</p>
                <hr>
            </div>
        </a>
    </div>
</body>

</html>