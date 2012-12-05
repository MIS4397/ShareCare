<?php
 echo "Starting file";
 require_once('Mail.class.php');
 echo "After Mail.php";
 
 $from = "noreply@sharecare.optic5.com";
 $to = "christopher.hale.3@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 echo $from." ";
 echo $to." ";
 
 $host = "mail.sharecare.optic5.com";
 $username = "noreply";
 $password = "openbucket13";
 echo $host." ";
 echo $username." ";
 echo $password." ";
 
 $headers = array('From' => $from,
   'To' => $to,
   'Subject' => $subject);
   echo $headers." ";
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
	 
	 echo $smtp." ";
 
 $mail = $smtp->send($to, $headers, $body);
 
 echo "after smtp call";
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>