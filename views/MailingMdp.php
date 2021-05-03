<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$adr =$_GET['email'];
$var1=$_SESSION['MOTDEPASSE'];
$var2=$_SESSION['USERNAME'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'houaidafatma.karoui@esprit.tn';        // SMTP username
    $mail->Password   = 'fatma23703032';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('houaidafatma.karoui@esprit.tn', 'Secretaire de Yassine');
    $mail->addAddress($adr,$var2);     // Add a recipient
    
    // Attachments
    //$mail->addAttachment($image);         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Recuperation mot de passe ";
    $mail->Body    = "Votre Mot de Passe est  : '$var1'";

    $mail->send();
    echo 'Message has been sent';
    $test=5;
    echo ("<script language='javascript'>window.location.href='LoginAdmin.php?notification=$test'</script>");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}