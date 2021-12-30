<?php
include "connect_to_db.php";
$db = dbConnect();

$reponsesGroupe = $db->prepare('SELECT * FROM groupe');
$reponsesGroupe->execute();

$tabl = array();
while ($donneesGroupe = $reponsesGroupe->fetch()) {
    array_push($tabl, $donneesGroupe);
}

function classement_sort($groupe1, $groupe2)
{
    return $groupe1["Classement"] - $groupe2["Classement"];
}

usort($tabl, "classement_sort");
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
            <?php for ($i = 0; $i < count($tabl); $i++) {

            ?>
                <tr>
                    <td><?php echo $tabl[$i]['Classement'] ?></td>
                    <td><?php echo $tabl[$i]['GroupeId'] ?></td>
                    <td><?php echo $tabl[$i]['NomGroupe'] ?></td>
                    <td><?php echo $tabl[$i]['SIRET'] ?></td>
                    <td><?php echo $tabl[$i]['Secteur'] ?></td>
                    <td><?php echo $tabl[$i]['Adresse'] ?></td>
                </tr>
            <?php }
            $reponsesGroupe->closeCursor();
            ?>
        </tbody>
    </table>
</body>

</html>