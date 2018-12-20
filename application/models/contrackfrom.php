<?php

if (isset($_POST['submit'])){
   $name = $_POST['name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['mail'];
   $message = $_POST['message'];
   
   $mailTo = "Pheerawitchp58@email.nu.ac.th";
   $headers = "From: ".$mailFrom;
   $txt = "You have receivedan e-mail from" .$name. ".\n\n.".$message;
       
    mail($mailTo,subject,$txt,$headers);
    header("Location:index.php?mailsend");
        
   
   
  
}