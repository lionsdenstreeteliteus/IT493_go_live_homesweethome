<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect and sanitize form data
  $name     = htmlspecialchars(trim($_POST['name'] ?? ''));
  $email    = htmlspecialchars(trim($_POST['email'] ?? ''));
  $phone    = htmlspecialchars(trim($_POST['phone'] ?? ''));
  $address  = htmlspecialchars(trim($_POST['address'] ?? ''));
  $services = $_POST['services'] ?? [];
  $servicesList = !empty($services) ? implode(", ", array_map('htmlspecialchars', $services)) : 'None selected';

  $mail = new PHPMailer(true);

  try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'homesweeethome190@gmail.com';
    $mail->Password   = 'ayji hcxz bfod wybq'; // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email headers
    $mail->setFrom('homesweeethome190@gmail.com', 'HSH HVAC');
    $mail->addAddress('homesweeethome190@gmail.com');
    $mail->Subject = 'New Booking Request';

    // Email body
    $mail->Body =
      "Name: $name\n" .
      "Email: $email\n" .
      "Phone: $phone\n" .
      "Address: $address\n" .
      "Selected Services: $servicesList\n\n";

    $mail->send();

    // Redirect after successful submission
    header("Location: ../booking.php");
    exit;

  } catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
  }
}
