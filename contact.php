<?php

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zipcode'];
    $message = $_POST['message'];

    $mailTo = "matt@ritzmarketing.com";
    $headers = "From: ".$email;
    $txt = "The following email is from the website contact page from: " "\n\n".$name."\n\n".$email."\n\n".$phone."\n\n".$address." ".$zip."\n\n".$message;

    mail($mailTo, $headers, $txt);
    header("Location: contact.html?mailsend");
  }

 ?>
