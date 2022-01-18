<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Inscription Gestionnaire</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <div class="header">
        <h1>Création de compte</h1>
        <p>Veuillez suivre les étapes suviant votre profil</p>
        <p>Si votre entreprise a déjà un compte, devenez membre de groupe</p>
    </div>

    <form action="../Controleur/inscription_Gest_post_controleur.php" method="POST">
        <div class="carte-contenu">
            <div class="dropBtn">
                <h2>Compte Chef de Groupe</h2>
                <p>Enregistrer votre espace de travail dans le projet Sens'Cert</p>
                <hr>
            </div>
            <div id="dropChef" class="dropContent">
                <label for="C.nom"><b>Nom</b></label><br>
                <input type="text" placeholder="Votre Nom" name="nom" id="C.nom" required><br>

                <label for="C.prenom"><b>Prénom</b></label><br>
                <input type="text" placeholder="Votre Prénom" name="prenom" id="C.prenom" required><br>

                <label for="C.email"><b>Email</b></label><br>
                <input type="text" placeholder="Votre adresse mail" name="email" id="C.email" required><br>

                <label for="C.mdp"><b>Mot de passe</b></label><br>
                <input type="password" placeholder="Enter Password" name="mdp" id="C.mdp" required><br>

                <label for="C.mdp-confirm" id="C.label-mdp-confirm"><b>Confirmez mot de passe</b></label><br>
                <input type="password" placeholder="Confirmez" name="mdp-confirm" id="C.mdp-confirm" required disabled><br>

                <label for="C.RIB"><b>Votre RIB</b></label><br>
                <input type="text" placeholder="Votre RIB" name="rib" id="C.RIB" required><br>

                <label for="C.nom-groupe"><b>Nom de votre groupe</b></label><br>
                <input type="text" placeholder="Nom du groupe" name="nom-groupe" id="C.nom-groupe" required><br>

                <label for="C.SIRET"><b>SIRET de votre groupe</b></label><br>
                <input type="text" placeholder="Votre SIRET" name="siret" id="C.SIRET" required><br>

                <label for="C.secteur"><b>Votre secteur d'entreprise</b></label><br>
                <input type="text" placeholder="Votre Secteur" name="secteur" id="C.secteur" required><br>

                <label for="C.adresse"><b>Votre adresse d'entreprise</b></label><br>
                <input type="text" placeholder="Votre Adresse" name="adresse" id="C.adresse" required><br>
                <hr>

                <p>En créant un compte vous acceptez nos <a href="#">Termes et conditions</a>.</p>
                <input type="submit" class="registerbtn" value="S'inscrire" disabled />
                <div class="login">
                    <p>Vous possédez un compte ? <a href="login_vue.php">Se connecter</a>.</p>
                </div>
            </div>
        </div>
    </form>
    <script src="../JS/inscription_Gest.js"></script>
</body>

</html>