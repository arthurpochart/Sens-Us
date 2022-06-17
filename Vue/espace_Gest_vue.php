<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/gauges.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">

    <title>Espace Gestionnaire</title>
    <style>


    </style>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <h1>Mon espace</h1>
    <h2 id="test"></h2>
    <h2>Taux en ppm de microparticules</h2>

    <div class="wrapper">
        <div id="gauge-particules" class="gauge-container particule">
            <span class="value-text">ppm10 µg/m^3</span>
        </div>
        <div id="gauge-co2" class="gauge-container co2">
            <span class="value-text">Co2 µg/m^3</span>
        </div>
    </div>

    <script src="../node_modules/svg-gauge/src/gauge.js"></script>
    <script>
        function getData(str){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("test").innerHTML = this.responseText;
            }
            xhttp.open("GET", "getPotData.php?q="+str);
            xhttp.send();
        }



        var pad = function(tar) {}
        var gauge1 = Gauge(
            document.getElementById("gauge-particules"), {
                max: 80,
                dialStartAngle: 90,
                dialEndAngle: 0,
                value: 12
            }
        );
        var gauge2 = Gauge(
            document.getElementById("gauge-co2"), {
                max: 80,
                dialStartAngle: 90,
                dialEndAngle: 0,
                value: 12
            }
        );
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        let i = 0;
        let randvalue1, randvalue2;
        async function loop(){
            while (i < 100) {
                randvalue1 = Math.random() * 100;
                randvalue2 = Math.random() * 100;
                gauge1.setValueAnimated(randvalue1 - 20, 3);
                gauge2.setValueAnimated(randvalue2 - 20, 3);
                i++;
                await sleep(3000);
                getData(1);
            }
        }
        loop();


    </script>
</body>

</html>