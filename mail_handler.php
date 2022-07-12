<?php 
if(isset($_POST["submit"])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST["email"]; // this is the sender's Email address
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

 
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
