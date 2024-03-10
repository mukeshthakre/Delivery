<?php

 $to_email = "kumarakakash1999@gmail.com";
 $subject = "Simple Email Testing via PHP";
 $body = "Hello,nn It is a testing email sent by PHP Script";
 $headers = "From: mukeshthakrebabai@gmail.com";

 if (mail($to_email, $subject, $body, $headers)) {
   echo "Email successfully sent to $to_email...";
 } else {
   echo "Email sending failed...";
 }

?>