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
    $txt = "Message from ".$name.".\n".$email."\n".$phone."\n".$address." ".$zip."\n\n".$message;

    mail($mailTo, $headers, $txt);
    header("Location: contact.html?mailsend");
  }

 ?>
