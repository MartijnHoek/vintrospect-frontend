<?php
// Include PHPMailer manually
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration for Strato
        $mail->isSMTP();
        $mail->Host       = 'smtp.strato.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@vintrospect.com'; // your Strato email
        $mail->Password   = 'yfIP{4f28n5I';        // your Strato mailbox password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Sender & recipient
        $mail->setFrom('info@vintrospect.com', 'Website Contact');
        $mail->addAddress('info@vintrospect.com'); // your mailbox
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(false);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";

        // Send the message
        $mail->send();

        // Redirect to thank-you page
        header("Location: thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "<p style='color:red;'>❌ Message could not be sent. Error: {$mail->ErrorInfo}</p>";
    }
}
