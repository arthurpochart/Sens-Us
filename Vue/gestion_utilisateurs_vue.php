<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/gestion_utilisateurs.css">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/background.css">
    <title>Gestion des utilisateurs</title>
</head>

<body class="background">
    <?php
    include "../Controleur/nav_controleur.php";
    nav_controleur();
    ?>
    <div>
        <h2>Gestion des utilisateurs</h2>
        <br>
        <div id="all-content">
            <?php for ($i = 0; $i < count($resultatsGroupeGest); $i++) {
            ?>
                <div class="groupe-gest-membre">
                    <div class="groupe" onclick="afficher(<?= $i ?>)">
                        <p class="titre">Groupe</p>
                        <p>
                            <?= $resultatsGroupeGest[$i]['NomGroupe'] ?>
                        </p>
                        <p>
                            <?= $resultatsGroupeGest[$i]['SIRET'] ?>
                        </p>
                        <p>
                            <?= $resultatsGroupeGest[$i]['Secteur'] ?>
                        </p>
                        <p>
                            <?= $resultatsGroupeGest[$i]['Adresse'] ?>
                        </p>
                        <p>
                            Code de groupe : <?= $resultatsGroupeGest[$i]['Code'] ?>
                        </p>
                        <p>
                            Classement : <?= $resultatsGroupeGest[$i]['Classement'] ?>
                        </p>
                        <p>
                        <form action="../Controleur/supprimer_Groupe_controleur.php" method="post">
                            <input type="hidden" name="code" value="<?= $resultatsGroupeGest[$i]['Code'] ?>">
                            <input type="submit" value="Supprimer" />
                        </form>
                        </p>
                    </div>

                    <div class="gest-membre">

                        <div class="gestionnaire">
                            <p class="titre">Gestionnaire</p>
                            <p>
                                <?= $resultatsGroupeGest[$i]['Nom'] ?>
                            </p>
                            <p>
                                <?= $resultatsGroupeGest[$i]['Prenom'] ?>
                            </p>
                            <p>
                                <?= $resultatsGroupeGest[$i]['Email'] ?>
                            </p>
                            <p>
                                <?= $resultatsGroupeGest[$i]['RIB'] ?>
                            </p>
                            <p>
                            <form action="../Controleur/supprimer_Gest_controleur.php" method="post">
                                <input type="hidden" name="email" value="<?= $resultatsGest[$i]['Email'] ?>">
                                <input type="submit" value="Supprimer" />
                            </form>
                            </p>
                        </div>

                        <?php for ($k = 0; $k < count($resultatsMembre); $k++) {
                            if ($resultatsGroupeGest[$i]['GestId'] == $resultatsMembre[$k]['GestId']) {

                        ?>
                                <div class="membre">
                                    <p class="titre">Membre</p>

                                    <p>
                                        <?= $resultatsMembre[$k]['Nom'] ?>
                                    </p>
                                    <p>
                                        <?= $resultatsMembre[$k]['Prenom'] ?>
                                    </p>
                                    <p>
                                        <?= $resultatsMembre[$k]['Email'] ?>
                                    </p>
                                    <p>
                                    <form action="../Controleur/supprimer_Membre_controleur.php" method="post">
                                        <input type="hidden" name="email" value="<?= $resultatsMembre[$k]['Email'] ?>">
                                        <input type="submit" value="Supprimer" />
                                    </form>
                                    </p>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</body>

<script>
    function afficher(i) {
        divGroupe = document.getElementsByClassName("gest-membre")[i]
        console.log(divGroupe.style.display)

        if (divGroupe.style.display === "none" || divGroupe.style.display == "") {
            divGroupe.style.display = "flex"
        } else {
            divGroupe.style.display = "none"
        }
    }
</script>

</html>