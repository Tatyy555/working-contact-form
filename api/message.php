<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $to = "tatsuya91yamaguchi@gmail.com";
    $subject = "TEST";
    $message = "This is TEST.\r\nHow are you?";
    $headers = "From: from@example.com";
    if(mail($to, $subject, $message, $headers)){
      echo "Your email has been sent";
    } else {
      echo "Sorry, failed to send your message!";
    }
  } else {
    echo "Enter a valid email address!";
  }
} else {
  echo "Email and password field is required!";
}
