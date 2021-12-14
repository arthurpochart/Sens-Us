<!DOCTYPE html>

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
    <title>Register</title>
</head>

<body class="background">
    <?php include "nav.php" ?>
    <div class="header">
        <h1>Creation de compte</h1>
        <p>Veuillez suivre les etapes suviant votre profil</p>
        <p>Si votre entreprise a deja un compte, devenez membre de groupe</p>
    </div>

    <form>
        <div class="carte-contenu">
            <div class="dropBtn" onclick="showMembre()">
                <h2>Compte Membre</h2>
                <p>Beneficiez de toutes les fonctionnalités SensCert</p>
                <hr>
            </div>
            <div id="dropMembre" class="dropContent">
                <label for="M.nom"><b>Nom</b></label>
                <input type="text" placeholder="Votre Nom" name="email" id="M.nom" required>

                <label for="M.prenom"><b>Prénom</b></label>
                <input type="text" placeholder="Votre Prénom" name="email" id="M.prenom" required>

                <label for="M.email"><b>Email</b></label>
                <input type="text" placeholder="Votre adresse mail" name="email" id="M.email" required>

                <label for="M.mdp"><b>Mot de passe</b></label>
                <input type="password" placeholder="Enter Password" name="mdp" id="M.mdp" required>

                <label for="M.mdp-confirm"><b>Confirmez mot de passe</b></label>
                <input type="password" placeholder="Confirmez" name="mdp-confirm" id="M.mdp-confirm" required>
                <hr>

                <p>En creant un compte vous acceptez nos <a href="#">Termes et conditions</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
                <div class="login">
                    <p>Vous possedez un compte?? <a href="login.php">Login</a>.</p>
                </div>
            </div>
        </div>
    </form>

    <form>
        <div class="carte-contenu">
            <div class="dropBtn" onclick="showChef()">
                <h2>Compte Chef de Groupe</h2>
                <p>Enregistrez votre espace de travail dans le projet SensCert</p>
                <hr>
            </div>
            <div id="dropChef" class="dropContent">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Votre adresse mail" name="email" id="email" required>

                <label for="C.mdp"><b>Mot de passe</b></label>
                <input type="password" placeholder="Enter Password" name="mdp" id="C.mdp" required>

                <label for="C.mdp-confirm"><b>Confirmez mot de passe</b></label>
                <input type="password" placeholder="Confirmez" name="mdp-confirm" id="C.mdp-confirm" required>
                <hr>

                <p>En creant un compte vous acceptez nos <a href="#">Termes et conditions</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
                <div class="login">
                    <p>Vous possedez un compte?? <a href="login.php">Login</a>.</p>
                </div>
            </div>
        </div>
    </form>
    <script>
        //Quand l'utulisateur clique sur la carte membre, le contenue est affiché
        function showMembre() {
            document.getElementById("dropMembre").classList.toggle("show");
        }

        function showChef() {
            document.getElementById("dropChef").classList.toggle("show");
        }
    </script>

</body>