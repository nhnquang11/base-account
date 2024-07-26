<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

const MAILER = 'nhnquang11@gmail.com';
const PASSWORD = 'haowqxatrwonpjuh';

class EmailSender
{
  public static function sendResetPassword($receiver, $newPassword)
  {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = MAILER;                                 //SMTP username
        $mail->Password   = PASSWORD;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('nhnquang11@gmail.com', 'Base');
        $mail->addAddress($receiver);     //Add a recipient

        //Content
        $mail->isHTML(true);          
        $mail->Subject = '[Base Account] Your password has been reset';                   
        $mail->Body    = "Please log in with a new generated password: {$newPassword}";
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } 
}
