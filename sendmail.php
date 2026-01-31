<?php
  if (isset($_POST['submit'])) {
    $to = "fpapalia@doctors.org.uk";
    $subject = "Dr Papalia Contact Form Submission";
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    echo "Message sent!";
  }
?>