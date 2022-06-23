<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <link rel="stylesheet" href="../CSS/gauges.css">
    <title>Espace membre</title>

</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    ?>
    <h1>Mon espace</h1>
    <h2>Vos capteurs</h2>
    <div class="wrapper">
        <div id="gauge-particules" class="gauge-container particule">
            <span class="value-text">ppm10 µg/m^3</span>
        </div>
        <div id="gauge-co2" class="gauge-container co2">
            <span class="value-text">CO2 µg/m^3</span>
        </div>
    </div>


    <script src="../node_modules/svg-gauge/src/gauge.js"></script>
    <script>
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
        async function loop() {
            while (i < 100) {
                randvalue1 = Math.random() * 100;
                randvalue2 = Math.random() * 100;
                gauge1.setValueAnimated(randvalue1 - 20, 3);
                gauge2.setValueAnimated(randvalue2 - 20, 3);
                i++;
                await sleep(3000)
            }
        }
        loop()
    </script>

    <table>
        <thead>
            <tr>
                <th>Id de la trame</th>
                <th>Type du capteur du groupe</th>
                <th>Numero du capteur</th>
                <th>Valeur renvoyé</th>
                <th>Horodatage</th>
            </tr>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count($resultatsGroupe); $i++) {

            ?>
                <tr>
                    <td><?= $resultatsGroupe[$i]['TrameId'] ?></td>
                    <td><?= $resultatsGroupe[$i]['TypeCapteur'] ?></td>
                    <td><?= $resultatsGroupe[$i]['NumeroCapteur'] ?></td>
                    <td><?= $resultatsGroupe[$i]['Valeur'] ?></td>
                    <td><?= $resultatsGroupe[$i]['Horodatage'] ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>