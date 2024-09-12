<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//require 'PHPMailer/Exception.php';
//require 'PHPMailer/PHPMailer.php';
//require 'PHPMailer/SMTP.php';

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "gerlemx10@hotmail.com";
$mail->Password = "lionelmessi10";

$mail->isHtml(true);

return $mail;