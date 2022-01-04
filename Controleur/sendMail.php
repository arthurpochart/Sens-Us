<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
$mail = new PHPMailer(true);

error_reporting(0);
$content = "Message venant de ".$_POST['mail']."en ".$_POST['country']."\n".$_POST["subject"]. "\n"."From: ".$_POST["firstname"]." ".$_POST['lastname'];

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '446cd7d1c27a27';
    $mail->Password = '9217486dd47c34';
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['mail'], $_POST["firstname"]." ".$_POST['lastname']);
    $mail->addAddress('contact@sens-us.com');     //Add a recipient
    #$mail->addCC('cc@example.com');
    #$mail->addBCC('bcc@example.com');

    //Attachments
    #$mail->addAttachment('/var/tmp/file.tar.gz');
    #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Sens-Us';
    $mail->Body    = $_POST["subject"];
    $mail->AltBody = $_POST["subject"];

    $mail->send();
    require("../Vue/remerciements_vue.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}