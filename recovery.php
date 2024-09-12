<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//require 'PHPMailer/Exception.php';
//require 'PHPMailer/PHPMailer.php';
//require 'PHPMailer/SMTP.php';

//require_once('conexion.php');



$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = $token;

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

require_once('conexion.php');

$sql = "UPDATE loguin
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $conectar->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($stmt->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("gerlemx10@hotmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/crud/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {

        $mail->send();
        header("Location: ./loginView.php?message=ok");

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

    }

}

echo "Mensaje enviado, por favor revisa tu correo.";
header("Location: ./loginView.php?message=ok");
/*$email = $_POST['email'];
$query = "SELECT * FROM loguin where email = '$email' AND status = 1";
$result = $conectar->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gerlemx10@hotmail.com';
    $mail->Password   = 'lionelmessi10';
    $mail->Port       = 587;

    $mail->setFrom('gerlemx10@hotmail.com', 'gerlem');
    $mail->addAddress($email, 'gerlem');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="localhost/crud/change_passwordView.php?id='.$row['id'].'">Recuperación de contraseña</a>';

    $mail->send();
    header("Location: ./index.php?message=ok");
} catch (Exception $e) {
  header("Location: ./index.php?message=error");
}

}else{
  header("Location: ./index.php?message=not_found");
}*/


?>
