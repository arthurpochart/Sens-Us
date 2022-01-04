<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <link rel="stylesheet" href="../CSS/profil_Membre_vue.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>

    <h1>Profil membre</h1>
    <h2>Informations personnelles membre</h2>
    <form action="#" method="post">
        <p><label for="nom">Nom : <?= $resultatsMembre['Nom'] ?></label></p>
        <p><label for="prenom">Prénom : <?= $resultatsMembre['Prenom'] ?></label></p>
        <p><label for="email">Email : <?= $resultatsMembre['Email'] ?></label></p>

        <div id="bouton">
            <p><input type="button" value="Modifier vos informations" onclick="modifierInfosPerso(3)" id="modificationPerso"></p>
            <p><input type="submit" value="Sauvegarder vos informations" id="sauvegardePerso" disabled /></p>
        </div>
    </form>

    <h2>Informations du groupe</h2>
    <p>Nom du groupe : <?= $resultatsGroupe['NomGroupe'] ?></p>
    <p>SIRET : <?= $resultatsGroupe['SIRET'] ?></p>
    <p>Secteur : <?= $resultatsGroupe['Secteur'] ?></p>
    <p>Adresse : <?= $resultatsGroupe['Adresse'] ?></p>
    <p>Code groupe : <?= $resultatsGroupe['Code'] ?></p>


    <script src="../JS/profil.js"></script>

</body>

</html>