<?php
ini_set('SMTP','smtp.jf-solutions.com');
if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['message']) && empty($_POST['anti-spam'])) {
    $email_to = 'info@jf-solutions.be';
    $subject = 'Mail from website';
    $message =  htmlspecialchars($_POST['message']);
    $from = htmlspecialchars($_POST['lastName'])." ".htmlspecialchars($_POST['firstName']);

   mail($email_to, $subject, $message, $from);
}
?>