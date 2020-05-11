<?php
  $email = 'pankiller257@gmail.com';
  $namesender = $_POST['name'];
  $emailsender = $_POST['email'];
  $subject = 'Pesan dari Kenzo Panel';
  $headers = "From: $namesender <$emailsender>";
  $message = $_POST['message'];
  mail($email, $subject, $message, $headers);
?>