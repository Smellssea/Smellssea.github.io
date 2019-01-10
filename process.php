<?php
  if(isset($_POST['submit'])) {
    
    $to = "smellssea@gmail.com";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $txt = $_POST['message'];
    $headers = "From: " .$email . "r/n" .
      "CC: somebodyelse@example.com";
    
    mail($to, $subject, $email, $txt, $headers );
    
    header("Location: contact.html")

  }
?>
