<?php
include "connect_to_db.php";
$db = dbConnect();

session_start();

$reponsesGest = $db->prepare('SELECT GestId, RIB, Nom, Prenom, Email FROM gestionnaire WHERE GestId = :gestid');
$reponsesGest->bindParam('gestid', $_SESSION['GestId']);

$reponsesGroupe = $db->prepare('SELECT GroupeId, NomGroupe, SIRET, Secteur, Adresse, Code, GestId FROM groupe WHERE GestId = :gestid');
$reponsesGroupe->bindParam('gestid', $_SESSION['GestId']);

$reponsesGest->execute();
$reponsesGroupe->execute();

$donneesGest = $reponsesGest->fetch();
$donneesGroupe = $reponsesGroupe->fetch();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "navaffichage.php";
    navaffichage();
    ?>

    <h1>Profil gestionnaire</h1>
    <h2>Informations personnelles gestionnaire</h2>
    <p>Nom : <?php echo $donneesGest['Nom'] ?></p>
    <p>Prénom : <?php echo $donneesGest['Prenom'] ?></p>
    <p>Email : <?php echo $donneesGest['Email'] ?></p>
    <p>RIB : <?php echo $donneesGest['RIB'] ?></p>


    <h2>Informations du groupe</h2>
    <p>Nom du groupe : <?php echo $donneesGroupe['NomGroupe'] ?></p>
    <p>SIRET : <?php echo $donneesGroupe['SIRET'] ?></p>
    <p>Secteur : <?php echo $donneesGroupe['Secteur'] ?></p>
    <p>Adresse : <?php echo $donneesGroupe['Adresse'] ?></p>
    <p>Code entreprise : <?php echo $donneesGroupe['Code'] ?></p>
</body>

</html>