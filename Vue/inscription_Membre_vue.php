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
    <title>Inscription Membre</title>
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

    <form action="../Controleur/inscription_Membre_post_controleur.php" method="POST">
        <div class="carte-contenu">
            <div class="dropBtn">
                <h2>Compte Membre</h2>
                <p>Bénéficier de toutes les fonctionnalités Sens'Cert</p>
                <hr>
            </div>
            <div id="dropMembre" class="dropContent">
                <label for="M.nom"><b>Nom</b></label>
                <input type="text" placeholder="Votre Nom" name="nom" id="M.nom" required><br>

                <label for="M.prenom"><b>Prénom</b></label>
                <input type="text" placeholder="Votre Prénom" name="prenom" id="M.prenom" required><br>

                <label for="M.email" id="M.label-email"><b>Email</b></label>
                <input type="text" placeholder="Votre adresse mail" name="email" id="M.email" required><br>

                <label for="M.email-confirm" id="M.label-email-confirm"><b>Confirmer votre email</b></label>
                <input type="text" placeholder="Confirmez votre adresse mail" name="email-confirm" id="M.email-confirm" required><br>

                <label for="M.mdp" id="M.label-mdp"><b>Mot de passe</b></label>
                <input type="password" placeholder="Votre mot de passe" name="mdp" id="M.mdp" required><br>

                <label for="M.mdp-confirm" id="M.label-mdp-confirm"><b>Confirmez mot de passe</b></label>
                <input type="password" placeholder="Confirmez votre mot de passe" name="mdp-confirm" id="M.mdp-confirm" required disabled><br>

                <label for="M.code"><b>Code de votre groupe</b></label>
                <input type="text" placeholder="Entrer le code de votre groupe" name="code" id="M.code" required><br>
                <hr>

                <p>En créant un compte vous acceptez nos <a href="#">Termes et conditions</a>.</p>
                <input type="submit" class="registerbtn" value="S'inscrire" disabled />
                <div class="login">
                    <p>Vous possédez un compte ? <a href="login_vue.php">Se connecter</a>.</p>
                </div>
            </div>
        </div>
    </form>
    <script src="../JS/inscription_Membre.js"></script>
</body>

</html>