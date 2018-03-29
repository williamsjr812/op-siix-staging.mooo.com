<?php
<<<<<<< HEAD
//if(isset($_POST["submit"])){
//    $to = "josh@op-siix.com";
//    $name = $_POST["Name"];
//    $from = $_POST['Email'];
//    $subject = $_POST["Subject"];
//    $subject2 = "Op-Siix Contact Confirmation";
//    $message = $name . " " . $name . " wrote the following: " . "\n\nSubject: " . $subject . "\n\nMessage: " . $_POST["message"];
//    $message2 = "Thank you for contacting Op-Siix. Here is a copy of your message:" . "\n\n" . $name . "\n\nSubject: " . $subject . "\n\nMessage: " . $_POST["message"];
//    $headers = "From: " . $from;
//    $headers2 = "From: " . $to;
//    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2);
//    echo "Message Sent. Thank you " . $name . ", we will contact you shortly.";
//}
//?>
=======
if(isset($_POST["submit"])){
    $to = "josh@op-siix.com";
    $name = $_POST["Name"];
    $from = $_POST['Email'];
    $subject = $_POST["Subject"];
    $subject2 = "Op-Siix Contact Confirmation";
    $message = $name . " " . $name . " wrote the following: " . "\n\nSubject: " . $subject . "\n\nMessage: " . $_POST["message"];
    $message2 = "Thank you for contacting Op-Siix. Here is a copy of your message:" . "\n\n" . $name . "\n\nSubject: " . $subject . "\n\nMessage: " . $_POST["message"];
    $headers = "From: " . $from;
    $headers2 = "From: " . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Message Sent. Thank you " . $name . ", we will contact you shortly.";
}
>>>>>>> 8ab9b97c5a6e6a98cfc83ebf48987e03c787fbe2
