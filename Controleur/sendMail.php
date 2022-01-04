<?php
#error_reporting(0);
ini_set("SMTP","smtp.mailgun.org");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "arthur.pochart@gmail.com");

$content = "Message venant de ".$_POST['mail']."en ".$_POST['country']."\n".$_POST["subject"]. "\n"."From: ".$_POST["firstname"]." ".$_POST['lastname'];

if(mail("arthur.pochart@gmail.com", "Sens-Us",message: $content)){

    require("../Vue/remerciements_vue.php") ;
}
else{
    echo "Probleme survenu!";
}

