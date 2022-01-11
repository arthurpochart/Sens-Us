<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <link rel="stylesheet" href="../CSS/profil_Gest_vue.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <h1>Mon espace</h1>
    <h2>Taux en ppm de microparticules</h2>
    <div id="gauge-particules" class="gauge-container"></div>
    <script src="../node_modules/svg-gauge/dist/gauge.js"></script>
    <script>
        var gauge_particules = Gauge(Document.getElementById('gauge-particules'))
    </script>

</body>

</html>