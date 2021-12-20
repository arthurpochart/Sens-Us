<?php
include "connect_to_db.php";
$db = dbConnect();

$email = $_POST['email'];
$pass_hache = sha1($_POST['mdp']);

$reponses = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email AND Mdp = :mdp');
$reponses->bindParam(':email', $email);
$reponses->bindParam(':mdp', $pass_hache);
$reponses->execute();


// TEST DE GUETGUET NE PAS EFFACER
// Récupération de la valeur du champ actif pour le login $email
// $stmt = $dbh->prepare("SELECT actif FROM gestionnaire WHERE Email = :email ");
// if ($stmt->execute(array(':email' => $email))  && $row = $stmt->fetch()) {
//     $actif = $row['actif']; // $actif contiendra alors 0 ou 1
// }

$resultats = $reponses->fetch();

if (!empty($email) && !empty($_POST['mdp'])) {
    if (!$resultats) {
        echo "Votre identifiant ou votre mot de passe est incorrect !";
    } else {
        session_start();
        $_SESSION['id'] = $resultats['GestId'];
        $_SESSION['email'] = $email;
        header('Location: ../index.php');
    }
} else {
    echo "Vos champs sont vides.";
}
