<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Page de connexion</title>
</head>

<body class="background">
    <?php include "nav.php" ?>
    <header class="header">
        <div>
            <h1>Connectez-vous ou inscrivez-vous sur Sens'Us!</h1>
            <picture>
                <img src="../Assets/Images/logoSens'Us.png" alt="logo" style="width:140px;height:200px;">
            </picture>
        </div>

        <form action="connexionChefGroupe_post.php" method="post">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <br>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <label for="mdp"><b>Mot de passe</b></label>
                <br>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <a href="../index.php">
                    <button type="submit">Se connecter</button>
                    <!--pensez à changer "button" pour un "submit" vers le php-->
                </a>
                <label id="coche">
                    <input type="checkbox" checked="checked" name="remember">
                    <b1>Se souvenir de moi</b1>
                </label>
            </div>

            <div class="container">
                <header class="header1">
                    <a href="../index.php">
                        <button type="reset" class="cancelbtn">Annuler</button>
                    </a>
                </header>

            </div>
        </form>
        <br>
        <br>
        <div>
            <b>Vous n'avez pas de compte ?</b>
            <br>
            <a href="register.php">
                <button type="button" id="creerUnCompte">Se créer un compte</button>
            </a>
        </div>
    </header>
</body>