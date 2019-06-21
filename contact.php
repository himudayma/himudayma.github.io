<?php
$to = 'maryjane@email.com';
$subject = $_POST["subject"];
$message = $_POST["message"]; 
$from = $_POST["mail"];
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>