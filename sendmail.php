<?php
  if (isset($_POST['submit'])) {
    $to = "drpapalia@d-s-s.co.uk";
    $subject = "Dr Papalia Contact Form Submission";
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    echo "Message sent!";
  }
?>
