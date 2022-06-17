<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/background.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Page d'accueil</title>
</head>

<body class="background">

    <?php
    include "Controleur/recuperer_trame_controleur.php";
    include "Controleur/nav_controleur.php";
    nav_controleur("Vue/");
    ?>

    <header class="header">
        <h1>Sens'Cert</h1>
        <p>Soyez en contrôle de vos émissions</p>
        <a href="Vue/register_vue.php">
            <button class="boutonHeader">Créer un compte</button>
        </a>

    </header>

    <div>
        <div class="bandeau" id="bandeau1">
            <div class="bandeau-container-img">
                <img src="Assets/Images/logoSens'Us.png" alt="Logo Sens'Us" id="img-SensUs" />
            </div>
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau">Sens'Us, une équipe qualifiée et efficace</h2>
                <p>
                    Le groupe Sens’Us est une équipe formée de 5 ingénieurs qualifiés et investis dont l’objectif premier réside en un service rapide et qualitatif assurant la satisfaction de notre client. Créé en 2021, Sens’Us a souhaité miser sur l’avenir et a donc choisi comme ligne directrice la protection de l’environnement et l’amélioration des conditions de travail. Ainsi, il nous a semblé logique d’axer notre premier projet présenté ci-dessous sur la qualité de l’air dans l’espace de travail.
                </p>
            </div>
        </div>
        <div class="bandeau" id="bandeau2">
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau2">Les enjeux écologiques</h2>
                <p2>
                    Depuis toujours notre équipe est grandement concernée par la cause écologique, et dans le contexte actuel, cet intérêt n’a cessé de croître. En effet, la situation environnementale mondiale devient critique, et chacun devient acteur d’un monde meilleur. Notre génération est d’autant plus concernée et c’est la raison pour laquelle notre projet vise à améliorer la situation environnementale de nos clients. Notre objectif est de pousser ceux-ci à s’impliquer dans ce combat écologique, en leur proposant une solution accessible et efficace.
                </p2>
            </div>
            <div class="bandeau-container-img">
                <img src="Assets/Images/ecologie.jpg" alt="Ecologie" id="img-ecologie" />
            </div>
        </div>
        <div class="bandeau" id="bandeau3">
            <div class="bandeau-container-img">
                <img src="Assets/Images/logoSens'Cert.png" alt="Logo Sens'Cert" id="img-SensCert" />
            </div>
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau">La Sens'Cert</h2>
                <p>
                    Ainsi, le produit que nous présentons à nos clients se présente sous la forme d’une certification. Celle-ci fonctionne simplement : nous plaçons des capteurs dans un lieu que notre collaborateur cherche à assainir, puis nous relevons les taux de microparticules, afin d’évaluer la qualité de l’air. Après avoir déterminé un taux « seuil », nous serons donc en mesure de délivrer ou non, la Sens’Cert, qui garantit un espace sain et idéal pour travailler.
                    L’objectif à terme est d’acquérir une renommée considérable, afin de donner une réelle valeur à cette certification, agrandir notre public, et ainsi pousser un maximum d’entreprises à assainir leurs locaux.
                </p>
            </div>
        </div>
        <div class="bandeau" id="bandeau4">
            <div class="bandeau-container-texte">
                <h2 class="titre-bandeau2">Des questions ?</h2>
                <p2>
                    Comment obtenir concrètement la Sens’Cert ? Comment devenir collaborateur de Sens’Us ? Comment assainir mon espace de travail ? Puis-je devenir client en tant qu’association ?
                    Si une quelconque question vous vient à l’esprit, que vous soyez déjà client ou non, la FAQ est à votre disposition, où vous trouverez les réponses aux questions les plus posées. Si votre question ne s’y trouve pas, n’hésitez pas à nous contacter pour nous expliquer directement votre problème, nous tâcherons de vous apporter une réponse rapide et personnalisée !
                </p2>
            </div>
            <div class="bandeau-container-img">
                <img src="Assets/Images/question.jpeg" alt="Point d'interrogation" id="img-question" />
            </div>
        </div>
    </div>
</body>

</html>