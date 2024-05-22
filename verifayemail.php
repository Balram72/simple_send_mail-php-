<?php
require './vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  $email = 'balrampanda87@gmail.com';
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'balrampanda77@gmail.com'; // Your Gmail SMTP username
        $mail->Password = 'aaahyatjerqcxxgc'; // Your Gmail SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('balrampanda77@gmail.com', 'MVDO Recruitment Registration');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Mvdo Recruitment Registration';
        $mail->Body = 'hello';
        $mail->send();
         
        }
       catch (Exception $e) {
        echo '<script>alert("Email could not be sent. ' . $e->getMessage() . '");</script>';
    }

?>
