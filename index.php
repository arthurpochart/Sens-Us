<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/background.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
    img {
        border-radius: 10%;
    }
    .justifier {
        text-align: justify;
        text-justify: inter-word;
    }
    </style>
    <title>Page d'accueil</title>
</head>

<body class="background">

    <?php
    include "PHP/navaffichage.php";
    navaffichage("PHP/");
    ?>

    <header class="header">
        <h1>Sens'Cert</h1>
        <p>Soyez en contrôle de vos émissions</p>
        <a href="PHP/register.php">
            <button class="boutonHeader">Créer un compte</button>
        </a>

    </header>

    <div>
        <div class="bandeau" id="bandeau1">
            <div class="bandeau-container-img">
                <img src="Assets/Images/logoSens'Us.png" alt="Logo Sens'Us" id="img-SensUs" />
            </div>
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau">Sens'Us, une équipe qualifiée et efficace</h2>
                <p>
                    Esse non esse quis mollit esse consequat. Cillum eu ad occaecat ad nulla cupidatat enim voluptate consequat. Eiusmod dolor eu dolor Lorem et consequat occaecat excepteur adipisicing dolore magna et. Elit ipsum veniam labore dolore occaecat nisi aute occaecat minim proident Lorem. Irure in mollit dolor deserunt non excepteur sint. Sit sit exercitation nisi pariatur esse aute consequat. Aliqua veniam qui cillum et qui proident qui proident adipisicing.
                </p>
            </div>
        </div>
        <div class="bandeau" id="bandeau2">
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau2">Les enjeux écologiques</h2>
                <p2>
                    Esse non esse quis mollit esse consequat. Cillum eu ad occaecat ad nulla cupidatat enim voluptate consequat. Eiusmod dolor eu dolor Lorem et consequat occaecat excepteur adipisicing dolore magna et. Elit ipsum veniam labore dolore occaecat nisi aute occaecat minim proident Lorem. Irure in mollit dolor deserunt non excepteur sint. Sit sit exercitation nisi pariatur esse aute consequat. Aliqua veniam qui cillum et qui proident qui proident adipisicing.
                </p2>
            </div>
            <div class="bandeau-container-img">
                <img src="Assets/Images/ecologie.jpg" alt="Ecologie" id="img-ecologie" />
            </div>
        </div>
        <div class="bandeau" id="bandeau3">
            <div class="bandeau-container-img">
                <img src="Assets/Images/logoSens'Cert.png" alt="Logo Sens'Cert" id="img-SensCert" />
            </div>
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau">La Sens'Cert</h2>
                <p>
                    Esse non esse quis mollit esse consequat. Cillum eu ad occaecat ad nulla cupidatat enim voluptate consequat. Eiusmod dolor eu dolor Lorem et consequat occaecat excepteur adipisicing dolore magna et. Elit ipsum veniam labore dolore occaecat nisi aute occaecat minim proident Lorem. Irure in mollit dolor deserunt non excepteur sint. Sit sit exercitation nisi pariatur esse aute consequat. Aliqua veniam qui cillum et qui proident qui proident adipisicing.
                </p>
            </div>
        </div>
        <div class="bandeau" id="bandeau4">
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau2">Des questions ?</h2>
                <p2>
                    Esse non esse quis mollit esse consequat. Cillum eu ad occaecat ad nulla cupidatat enim voluptate consequat. Eiusmod dolor eu dolor Lorem et consequat occaecat excepteur adipisicing dolore magna et. Elit ipsum veniam labore dolore occaecat nisi aute occaecat minim proident Lorem. Irure in mollit dolor deserunt non excepteur sint. Sit sit exercitation nisi pariatur esse aute consequat. Aliqua veniam qui cillum et qui proident qui proident adipisicing.
                </p2>
            </div>
            <div class="bandeau-container-img">
                <img src="Assets/Images/question.jpeg" alt="Point d'interrogation" id="img-question" />
            </div>
        </div>
    </div>
</body>

</html>