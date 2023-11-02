<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'helpingyouforthis@gmail.com';
    $mail->Password = 'wpzahcvgsgcsdgqs';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('helpingyouforthis@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML (true);
    $mail->Subject = 'Emailtochangepass-reg';
    $mail->Body = 'This email is to reset your password and the link is attached below';
    $mail->send();
    header('Location: index.php');
    exit();
}