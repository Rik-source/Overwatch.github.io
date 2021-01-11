<?php

if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $mailFrom = $_POST['mail'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $mailTo = "rikvanmoll@outlook.com";
 $headers = "From: ".$mailFrom;
 $txt = "je hebt een e-mail ontvangen van". $name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact1.html?mailsend");
}
