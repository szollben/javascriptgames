<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
error_reporting(E_ERROR | E_PARSE);

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$subject = $_POST['subject'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'js.games.java@gmail.com';                     //SMTP username
    $mail->Password   = 'rqkxjowujmvgdvyn';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('js.games.java@gmail.com', 'JavaScript jatekok');
    $mail->addAddress($email,  $firstname );     //Add a recipient
    $mail->addAddress('js.games.java@gmail.com');               //Name is optional
    $mail->addReplyTo('js.games.java@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Visszaigazolo email';
    $mail->Body    = 'Köszönjük üzenetét! <br>' . $subject;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $uzen = 'Üzenet elküldve';
} catch (Exception $e) {
    $uzen = "Hiba! Az üzentet nem sikerült elküldni {$mail->ErrorInfo}";
}
