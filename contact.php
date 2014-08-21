<?php

if (!empty($_POST)) {
   if(empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["subject"]) || empty($_POST["message"])){
	header("Location: /index.html");
	die;
}

  if (isset($_POST["email"])) {
    $from = $_POST["name"]."<".$_POST["email"].">"; 
    $subject = "Contact Request at git hub";
    $message = "Subject:".$_POST["subject"]." message :  ".$_POST["message"];
    $message = wordwrap($message, 70);
    // send mail
    mail("ravi.kumar1676@gmail.com",$subject,$message,"From: $from\n");
    echo "<h1 style='color:green;'>Thank you for contacting!!!</h1><br>will get back to you soon";
  }
}
?>