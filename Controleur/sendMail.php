<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
require 'sanitize.php';
$mail = new PHPMailer(true);

error_reporting(0);
$content = "Message venant de ".$_POST['mail']."en ".$_POST['country']."\n".$_POST["subject"]. "\n"."From: ".$_POST["firstname"]." ".$_POST['lastname'];

try {
    #Server
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = 'contact.sens.us.2022@gmail.com';
    $mail->Password = 'ekip1234';

    $sanitizedmail = sanitizeEmail($_POST['mail']);
    $mail->setFrom($sanitizedmail, $_POST["firstname"]." ".$_POST['lastname']." : ".$sanitizedmail);
    $mail->addAddress('contact@sens-us.com');
    #Message
    $mail->isHTML(true);
    $mail->Subject = 'Contact Sens-Us';
    $mail->Body    = $_POST["subject"];
    $mail->AltBody = $_POST["subject"];

    $mail->send();
    require("../Vue/remerciements_vue.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}