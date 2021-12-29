<?php
include "connect_to_db.php";
$db = dbConnect();

$email = $_POST['email'];
$pass_hache = sha1($_POST['mdp']);

$reponsesGest = $db->prepare('SELECT GestId FROM gestionnaire WHERE Email = :email AND Mdp = :mdp');
$reponsesGest->bindParam(':email', $email);
$reponsesGest->bindParam(':mdp', $pass_hache);
$reponsesGest->execute();

$reponsesMembre = $db->prepare('SELECT MembreId FROM membre WHERE Email = :email AND Mdp = :mdp');
$reponsesMembre->bindParam(':email', $email);
$reponsesMembre->bindParam(':mdp', $pass_hache);
$reponsesMembre->execute();

// TEST DE GUETGUET NE PAS EFFACER
// Récupération de la valeur du champ actif pour le login $email
// $stmt = $db->prepare("SELECT actif FROM gestionnaire WHERE Email = :email ");
// if ($stmt->execute(array(':email' => $email))  && $row = $stmt->fetch()) {
//     $actif = $row['actif']; // $actif contiendra alors 0 ou 1
// }

$resultatsGest = $reponsesGest->fetch();
$resultatsMembre = $reponsesMembre->fetch();


if (!empty($email) && !empty($_POST['mdp'])) {
    if ($resultatsGest != false && $resultatsMembre != false) {
        echo "Votre identifiant ou votre mot de passe est incorrect !";
    } else {
        session_start();
        $_SESSION['GestId'] = $resultatsGest['GestId'];
        $_SESSION['MembreId'] = $resultatsMembre['MembreId'];
        $_SESSION['email'] = $email;
        header('Location: ../index.php');
    }
} else {
    echo "Vos champs sont vides.";
}
