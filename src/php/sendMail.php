<?php
if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['message'])) {
   $message =  htmlspecialchars($_POST['message']);
   $from = htmlspecialchars($_POST['lastName'])." ".htmlspecialchars($_POST['firstName']);

   mail('info@jf-solutions.be','Mail from website', $message, $from);
}
?>