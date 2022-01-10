<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <link rel="stylesheet" href="../CSS/profil_Gest_vue.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>

    <h1>Profil gestionnaire</h1>
    <h2>Informations personnelles gestionnaire</h2>
    <form action="#" method="post">
        <p><label for="nom"><span>Nom</span> : <?= $resultatsGest['Nom'] ?></label></p>
        <p><label for="prenom"><span>Prénom</span> : <?= $resultatsGest['Prenom'] ?></label></p>
        <p><label for="email"><span>Email</span> : <?= $resultatsGest['Email'] ?></label></p>
        <p><label for="rib"><span>RIB</span> : <?= $resultatsGest['RIB'] ?></label></p>

        <div id="bouton">
            <p><input type="button" value="Modifier vos informations" onclick="modifierInfosPerso(4)" id="modificationPerso"></p>
            <p><input type="submit" value="Sauvegarder vos informations" id="sauvegardePerso" disabled /></p>
        </div>
    </form>

    <h2>Informations du groupe</h2>
    <form action="#" method="post">
        <p><label for="nomGroupe"><span>Nom du groupe</span> : <?= $resultatsGroupe['NomGroupe'] ?></label></p>
        <p><label for="siret"><span>SIRET</span> : <?= $resultatsGroupe['SIRET'] ?></label></p>
        <p><label for="secteur"><span>Secteur</span> : <?= $resultatsGroupe['Secteur'] ?></label></p>
        <p><label for="adresse"><span>Adresse</span> : <?= $resultatsGroupe['Adresse'] ?></label></p>
        <p><label for="codeGroupe"><span>Code du groupe</span> : <?= $resultatsGroupe['Code'] ?></label></p>

        <div id="bouton">
            <p><input type="button" value="Modifier vos informations" onclick="modifierInfosGroupe(4)" id="modificationGroupe"></p>
            <p><input type="submit" value="Sauvegarder vos informations" id="sauvegardeGroupe" disabled /></p>
        </div>
    </form>

    <script src="../JS/profil.js"></script>

</body>

</html>