<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->Host = 'smtp.gmail.com';
$mail->IsHTML(true);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;
$mail->Username = "liana07lilith@gmail.com";
$mail->Password = "tiesto07";

//Sender Info
try {
    $mail->setFrom('info@webdev.com', 'WebDev');
} catch (phpmailerException $e) {
}
$mail->FromName = "Exparts Community";

