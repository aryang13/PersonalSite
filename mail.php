<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n\n Message: $message";
    $recipient = "aryan.gandhi@hotmail.com";
    $subject = $_POST['subject'];;
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='website.html' style='text-decoration:none;color:#ff0099;> Return Home</a>";
?>
