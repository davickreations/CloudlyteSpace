<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'zoharyokobson.co';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'no-reply@zoharyokobson.co';           
    $mail->Password   = 'Partnerincrime';                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('no-reply@zoharyokobson.co', $name);
    $mail->addAddress("davmoe39@gmail.com", "Eva Levvy");
    $mail->addAddress("mrfunnyedu@gmail.com", "Eva Levvy");

    // Content
    $mail->isHTML(true);                                      
    $mail->Subject = $subject;
    $mail->Body    = "Sender's Name: $name <br> Sender's Email: $email <br> Message: $message <br>";

    $mail->send();

    include 'thankyou.html';

    $confirmationMail = new PHPMailer(true);
    $confirmationMail->isSMTP();
    $confirmationMail->Host = 'zoharyokobson.co';
    $confirmationMail->SMTPAuth = true;
    $confirmationMail->Username = 'no-reply@zoharyokobson.co';
    $confirmationMail->Password = 'Partnerincrime';
    $confirmationMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $confirmationMail->Port = 465;
    $confirmationMail->setFrom('no-reply@zoharyokobson.co', 'CloudlyteSpace Technologies');
    $confirmationMail->addAddress($email); 
    $confirmationMail->addReplyTo('davickreations@gmail.com', 'Reply Name'); 
    $confirmationMail->isHTML(true);
    $confirmationMail->Subject = 'Message Confirmation';
    $confirmationMail->Body = 'Your message has been received and will be addressed soon.';

    $confirmationMail->send();
} catch (Exception $e) {

    include 'error.html';
}
