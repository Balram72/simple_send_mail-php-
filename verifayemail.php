<?php
require './vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  $email = 'balrampanda11@gmail.com';
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Your Gmail'; // Your Gmail SMTP username
        $mail->Password = 'Your Gmail Password'; // Your Gmail SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('Your Gmail', 'Recruitment Registration');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Recruitment Registration';
        $mail->Body = 'hello';
        $mail->send();
         
        }
       catch (Exception $e) {
        echo '<script>alert("Email could not be sent. ' . $e->getMessage() . '");</script>';
    }

?>
