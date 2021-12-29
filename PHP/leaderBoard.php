<?php
include "connect_to_db.php";
$db = dbConnect();

$reponsesGroupe = $db->prepare('SELECT * FROM groupe');
$reponsesGroupe->execute();

$donneesGroupe = $reponsesGroupe->fetch();
?>

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
    include "navaffichage.php";
    navaffichage();
    ?>

    <table>
        <caption>LeaderBoard</caption>
        <?php var_dump($donneesGroupe); ?>
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
            <tr>
                <td><?php echo $donneesGroupe['Classement'] ?></td>
                <td><?php echo $donneesGroupe['GroupeId'] ?></td>
                <td><?php echo $donneesGroupe['NomGroupe'] ?></td>
                <td><?php echo $donneesGroupe['SIRET'] ?></td>
                <td><?php echo $donneesGroupe['Secteur'] ?></td>
                <td><?php echo $donneesGroupe['Adresse'] ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>