<?php
include "connect_to_db.php";
$db = dbConnect();

session_start();

$reponsesMembre = $db->prepare('SELECT Nom, Prenom, Email FROM membre WHERE MembreId = :membreid');
$reponsesMembre->bindParam('membreid', $_SESSION['MembreId']);

$reponsesGroupe = $db->prepare('SELECT NomGroupe, SIRET, Secteur, Adresse, Code FROM groupe JOIN membre ON groupe.GroupeId = membre.GroupeId AND membre.MembreId = :membreid');
$reponsesGroupe->bindParam('membreid', $_SESSION['MembreId']);

$reponsesMembre->execute();
$reponsesGroupe->execute();

$donneesMembre = $reponsesMembre->fetch();
$donneesGroupe = $reponsesGroupe->fetch();
?>

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
    include "navaffichage.php";
    navaffichage();
    ?>

    <h1>Profil membre</h1>
    <h2>Informations personnelles gestionnaire</h2>
    <p><?php echo $donneesMembre['Nom'] ?></p>
    <p><?php echo $donneesMembre['Prenom'] ?></p>
    <p><?php echo $donneesMembre['Email'] ?></p>

    <h2>Informations du groupe</h2>
    <p><?php echo $donneesGroupe['NomGroupe'] ?></p>
    <p><?php echo $donneesGroupe['SIRET'] ?></p>
    <p><?php echo $donneesGroupe['Secteur'] ?></p>
    <p><?php echo $donneesGroupe['Adresse'] ?></p>
    <p><?php echo $donneesGroupe['Code'] ?></p>
</body>

</html>