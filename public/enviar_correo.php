<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../public/Mailer/Exception.php';
require '../public/Mailer/PHPMailer.php';
require '../public/Mailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'trbshopee@gmail.com';                     // SMTP username
    $mail->Password   = 'trbshopee';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('trbshopee@gmail.com', 'TRB_SHOPEE');
    $mail->addAddress($email);     // a quien se le va a enviar


    // Attachments
    $mail->addAttachment($archivo);         // Add attachments


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Comprobante de pago - TRB SHOPEE';
    $mail->Body    = 'Gracias por su compra, le adjuntamos el comprobante de pago';


    $mail->send();
    echo 'mensaje se envió correctamente';
} catch (Exception $e) {
    echo "error al enviar el mensaje: {$mail->ErrorInfo}";
}