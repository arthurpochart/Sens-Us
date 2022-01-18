<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <link rel="stylesheet" href="../CSS/profil_vue.css">
    <title>Document</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <h1>Profil membre</h1>

    <div id="infos">
        <div id="infosPersos">
            <h2>Informations personnelles membre</h2>
            <form action="../Controleur/modif_Membre_post_controleur.php" method="post">
                <p><label for="nom"><span>Nom</span> : <?= $resultatsMembre['Nom'] ?></label></p>
                <p><label for="prenom"><span>Prénom</span> : <?= $resultatsMembre['Prenom'] ?></label></p>
                <p><label for="email"><span>Email</span> : <?= $resultatsMembre['Email'] ?></label></p>

                <div id="bouton">
                    <p><input type="button" value="Modifier vos informations" onclick="modifierInfosPerso(3)" id="modificationPerso"></p>
                    <p><input type="submit" value="Sauvegarder vos informations" id="sauvegardePerso" disabled /></p>
                </div>
            </form>
        </div>

        <div id="infosGroupe">
            <h2>Informations du groupe</h2>
            <p><span>Nom du groupe</span> : <?= $resultatsGroupe['NomGroupe'] ?></p>
            <p><span>SIRET</span> : <?= $resultatsGroupe['SIRET'] ?></p>
            <p><span>Secteur</span> : <?= $resultatsGroupe['Secteur'] ?></p>
            <p><span>Adresse</span> <?= $resultatsGroupe['Adresse'] ?></p>
            <p><span>Code groupe</span> : <?= $resultatsGroupe['Code'] ?></p>
        </div>
    </div>

    <script src="../JS/profil.js"></script>

</body>

</html>