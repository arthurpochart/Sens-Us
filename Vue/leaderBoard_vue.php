<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/leaderBoard.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <table>
        <caption>LeaderBoard</caption>
        <thead>
            <tr>
                <th>Classement</th>
                <th>Id du groupe</th>
                <th>Nom du groupe</th>
                <th>SIRET</th>
                <th>Secteur</th>
                <th>Adresse</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Classement</th>
                <th>Id du groupe</th>
                <th>Nom du groupe</th>
                <th>SIRET</th>
                <th>Secteur</th>
                <th>Adresse</th>
            </tr>
        </tfoot>

        <tbody>
            <?php for ($i = 0; $i < count($resultatsGroupe); $i++) {

            ?>
                <tr>
                    <td><?= $resultatsGroupe[$i]['Classement'] ?></td>
                    <td><?= $resultatsGroupe[$i]['GroupeId'] ?></td>
                    <td><?= $resultatsGroupe[$i]['NomGroupe'] ?></td>
                    <td><?= $resultatsGroupe[$i]['SIRET'] ?></td>
                    <td><?= $resultatsGroupe[$i]['Secteur'] ?></td>
                    <td><?= $resultatsGroupe[$i]['Adresse'] ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>