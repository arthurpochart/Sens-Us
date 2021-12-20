<?
// TEST DE GUETGUET NE PAS TOUCHER
// include "connect_to_db.php";
// $db = dbConnect();

// $email = $_GET['log'];
// $cle = $_GET['cle'];

// $reponseCle = $db->prepare("SELECT Cle, Actif FROM gestionnaire WHERE Email = :email");
// $reponseCle->closeCursor();

// if ($reponseCle->execute(array(':email' => $email)) && $row = $reponseCle->fetch()) {
//     $clebdd = $row['cle'];    // Récupération de la clé
//     $actif = $row['actif']; // $actif contiendra alors 0 ou 1
// }

// // On teste la valeur de la variable $actif récupérée dans la BDD
// if ($actif == '1') // Si le compte est déjà actif on prévient
// {
//     echo "Votre compte est déjà actif !";
// } else // Si ce n'est pas le cas on passe aux comparaisons
// {
//     if ($cle == $clebdd) // On compare nos deux clés    
//     {
//         // Si elles correspondent on active le compte !    
//         echo "Votre compte a bien été activé !";

//         // La requête qui va passer notre champ actif de 0 à 1
//         $reponseCle = $db->prepare("UPDATE gestionnaire SET actif = 1 WHERE Email like :email ");
//         $stmt->bindParam(':email', $email);
//         $stmt->execute();
//         $reponseCle->closeCursor();
//     } else // Si les deux clés sont différentes on provoque une erreur...
//     {
//         echo "Erreur ! Votre compte ne peut être activé...";
//     }
// }
