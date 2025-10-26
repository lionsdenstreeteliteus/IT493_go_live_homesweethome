<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect and sanitize form data
  $name    = $_POST['name'] ?? '';
  $email   = $_POST['email'] ?? '';
  $phone   = $_POST['phone'] ?? '';
  $address = $_POST['address'] ?? '';
  $message = $_POST['message'] ?? '';

  $mail = new PHPMailer(true);

  try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';     // GMAIL SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'homesweeethome190@gmail.com';
    // $mail->Password   = 'homesweeethome';    // Use your actual password or app password
    $mail->Password   = 'ayji hcxz bfod wybq';
    $mail->SMTPSecure = 'tls';                    // TLS is required
    $mail->Port       = 587;
    // $mail->SMTPDebug = 2;  // Enable verbose debug output
    // Email headers
    $mail->setFrom('homesweeethome190@gmail.com', 'HSH HVAC');
    $mail->addAddress('homesweeethome190@gmail.com');
    $mail->Subject = 'New Estimate Request';

    // Email body
    $mail->Body =
      "Name: $name\n" .
      "Email: $email\n" .
      "Phone: $phone\n" .
      "Address: $address\n\n" .
      "Message:\n$message";

    $mail->send();
    header("Location: " . '../contact.php');
    exit;
    // echo "Message sent successfully!";
  } catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
  }
}
