<?php


require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['contact'])) {
    $names = isset($_POST["names"]) ? $_POST['names'] : null;
    $email = isset($_POST["email"]) ? $_POST['email'] : null;
    $subject = isset($_POST["subject"]) ? $_POST['subject'] : null;
    $message = isset($_POST["message"]) ? $_POST['message'] : null;
    try {
        $template = file_get_contents('mailtemplate.html'); // Path to your template file

        // Replace placeholders with dynamic data
        $template = str_replace('{{subject}}', $subject, $template);
        $template = str_replace('{{message}}', $message, $template);
        $template = str_replace('{{year}}', date('Y'), $template);
        $template = str_replace('{{names}}', $names, $template);
        $template = str_replace('{{email}}', $email, $template);
        $mail = new PHPMailer();
        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host       = 'mail.procodestechnologies.co.ke'; // Specify main SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'admin@procodestechnologies.co.ke'; // SMTP username
        $mail->Password   = 'johnathan&nathaniel';            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
        $mail->Port       = 587;

        $mail->setFrom($email, $names, true);
        $mail->addAddress("jablessions76@gmail.com", "Message From Website"); // Recipient's email

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $template;                          // Use the template as the email body
        $mail->AltBody = 'This is a plain-text version of the email content.';

        // Send the email
        $mail->send();
        echo json_encode([
            'status' => 'success',
            'message' => "Email sent successfully!"
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => "Check your details!"
    ]);
}
