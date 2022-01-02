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
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>

    <h1>Profil gestionnaire</h1>
    <h2>Informations personnelles gestionnaire</h2>
    <p>Nom : <?= $resultatsGest['Nom'] ?></p>
    <p>Prénom : <?= $resultatsGest['Prenom'] ?></p>
    <p>Email : <?= $resultatsGest['Email'] ?></p>
    <p>RIB : <?= $resultatsGest['RIB'] ?></p>


    <h2>Informations du groupe</h2>
    <p>Nom du groupe : <?= $resultatsGroupe['NomGroupe'] ?></p>
    <p>SIRET : <?= $resultatsGroupe['SIRET'] ?></p>
    <p>Secteur : <?= $resultatsGroupe['Secteur'] ?></p>
    <p>Adresse : <?= $resultatsGroupe['Adresse'] ?></p>
    <p>Code entreprise : <?= $resultatsGroupe['Code'] ?></p>
</body>

</html>