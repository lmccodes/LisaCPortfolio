Thanks for contacting me! I'll be in touch with you soon.

<?php
  $userName = $_POST['contact-name'];
  $userEmail = $_POST['email-address'];
  $userMessage = $_POST['message'];

  $to = "lisa.m.childress@gmail.com";
  $subject = "Email from My Design Site";
  $body = "Information submitted:";

  $body .= "\r\n Name: " . $userName;
  $body .= "\r\n Name: " . $userEmail;
  $body .= "\r\n Message: " . $userMessage;

  mail($to, $subject, $body);
?>
