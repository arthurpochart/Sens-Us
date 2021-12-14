<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nous contacter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/contact.css">
  <link rel="stylesheet" href="../CSS/nav.css">
  <link rel="stylesheet" href="../CSS/background.css">
</head>

<body class="background">
  <?php include "nav.php" ?>

  <div class="container">
    <div id="title">
      <h1>Contact'Us</h1>
    </div>
    <form action="remerciements.php">
      <label for="fname">Votre prénom :</label>
      <input type="text" id="fname" name="firstname" placeholder="Votre prénom...">
      <label for="lname">Votre nom :</label>
      <input type="text" id="lname" name="lastname" placeholder="Votre nom...">

      <label for="mail">Votre email :</label>
      <input type="email" id="mail" name="mail" placeholder="jean.dupont@exemple.com">

      <label for="country">Pays :</label>
      <select id="country" name="country">
        <option value="australia">France</option>
        <option value="canada">Espagne</option>
        <option value="usa">Belgique</option>
        <option value="usa">Luxembourg</option>
        <option value="usa">Italie</option>
        <option value="usa">Suisse</option>
      </select>

      <label for="subject">Sujet de votre demande :</label>
      <textarea id="subject" name="subject" placeholder="Quelle est votre question ?" style="height:200px"></textarea>

      <input type="submit" value="Envoyer">
    </form>
  </div>
</body>

</html>