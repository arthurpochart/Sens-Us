<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Document</title>
    <style>
        p {
            margin: 30px;
        }

        h1 {
            margin-top: 60px;
            margin-left: 20px;
            background-color: rgb(255, 255, 255);
            width: 300px;
            border: 2px solid rgb(0, 0, 0);
            padding: 5px;
            border-radius: 12px;
            text-align: center;
        }

        h2 {
            margin: 20px;
            color: #04aa6d;
        }
        .wrapper {
            height: 100px;
            float: left;
            margin: 7px;
            overflow: hidden;
        }
        .wrapper > .gauge-container {
            margin: 0;
        }
        .gauge-container {
            width: 150px;
            height: 150px;
            display: block;
            float: left;
            padding: 10px;
            background-color: aliceblue;
            margin: 7px 20px;
            border-radius: 3px;
            position: relative;
        }
        .gauge-container.particule > .gauge .dial {
            stroke: #334455;
            stroke-width: 10;
        }
        .gauge-container.particule > .gauge .value {
            stroke: #F32450;
            stroke-dasharray: none;
            stroke-width: 10;
        }
        .gauge-container.particule > .gauge .value-text {
            fill: #F32450;
            transform: translate3d(26%, 20%, 0);
            display: inline-block;
        }
        .gauge-container.particule .value-text {
            color: #F32450;
            font-weight: 100;
            position: absolute;
            bottom: 18%;
            right: 10%;
            display: inline-block;
        }

    </style>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <h1>Mon espace</h1>
    <h2>Taux en ppm de microparticules</h2>
    <div id="gauge-particules" class="gauge-container particule">
        <span class="value-text">µg/m^3</span>
    </div>
    <script src="../node_modules/svg-gauge/src/gauge.js"></script>
    <script>
        var pad = function(tar) {}

        var gaugeParticule = Gauge(
            document.getElementById("gauge-particules"), {
                max: 80,
                dialStartAngle: 90,
                dialEndAngle: 0,
                value: 12
            }
        );
    </script>


</body>

</html>