<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once '..\vendor\autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
 
  if(isset($_POST['mailing'])){
      
    try {
     // GET VALUES
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
        
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'elmahditest@gmail.com'; // SMTP username
        $mail->Password = 'ihlf mcvl avki dvmz'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable implicit TLS encryption
        $mail->Port = 587; // TCP port to connect to; use 587 for TLS
        // Character encoding
        $mail->CharSet = 'UTF-8'; // Set email format to UTF-8
        // Recipients
        $mail->setFrom($email, 'Contact Form'); // Your email address and a name for the sender
        $mail->addAddress('elmahditest@gmail.com', 'elmahdi test'); // Your email address to receive the message
        $mail->addReplyTo($email);
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "$subject" ;
        $mail->Body = "$message   <br> Phone Number :<h2> $phone </h2>";
        
        $mail->send();
        echo 'Message has been sent';
        header("Location: ../contactus/contactus.php?mailsuccess=true"); // Corrected the header function
        exit(); // Ensure script stops executing after redirect
        } catch (Exception $e) {
          header("Location: ../contactus/contactus.php?mailfaild=true"); 
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
  }




?>