

<?php

function sendMail($to , $subject , $message , $headers){

    $headers = "From: " . $headers['from'] . "\r\n" .
               "Reply-To: " . $headers['reply-to'] . "\r\n" .
               "Content-Type: text/html; charset=UTF-8\r\n";

    
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare email details
    $to = 'amarjaneelmahdi03@gmail.com'; // Replace with your recipient email address
    $headers = array(
        'from' => $email, // Replace with your email address
        'reply-to' => 'amarjaneelmahdi03@gmail.com'
    );

    // Call the sendMail function
    sendMail($to, $subject, $message, $headers);
} else {
    echo 'Invalid request method';
}

?>

