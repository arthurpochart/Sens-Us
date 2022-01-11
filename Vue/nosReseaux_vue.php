<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/NosReseaux.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Sens'Us</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <header class="header">
        <h1>Nous contacter !</h1>
    </header>
    <div id="all-page">
        <div>
            <h1>Nos réseaux</h1>
            <div id="container-all-person">
                <div class="container-one-person">
                    <a href="https://www.facebook.com/SensUs-113391014559152" target="_blank">
                        <img src="../Assets/Images/logo-facebook.png" width="200" alt="Facebook" />
                    </a>
                    <p>
                        Rejoignez-nous sur Facebook !    
                    </p>
                </div>
                <div class="container-one-person">
                    <a href="https://linkedin.com/" target="_blank">
                        <img src="../Assets/Images/logo-linkedin.png" width="200" alt="Linkedin" />
                    </a>
                    <p>
                        Rejoignez-nous sur linkedin !
                    </p>
                </div>
                <div class="container-one-person">
                    <a href="https://www.Instagram.com/" target="_blank">
                        <img src="../Assets/Images/Instagram-Logo-PNG-Image.png" width="195" alt="Instagram" />
                    </a>
                    <p>
                        Rejoignez-nous sur Instagram ! 
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>