<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/leaderBoard.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>LeaderBoard</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <div>
        <h2>Caca</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Classement</th>
                    <th>Nom du groupe</th>
                    <th>SIRET</th>
                    <th>Secteur</th>
                    <th>Adresse</th>
                </tr>
            </thead>

            <tbody>
                <?php for ($i = 0; $i < count($resultatsGroupe); $i++) {

                ?>
                    <tr>
                        <td><?= $resultatsGroupe[$i]['Classement'] ?></td>
                        <td><?= $resultatsGroupe[$i]['NomGroupe'] ?></td>
                        <td><?= $resultatsGroupe[$i]['SIRET'] ?></td>
                        <td><?= $resultatsGroupe[$i]['Secteur'] ?></td>
                        <td><?= $resultatsGroupe[$i]['Adresse'] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>