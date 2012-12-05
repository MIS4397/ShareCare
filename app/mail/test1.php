<?php
require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "smtp.gmail.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "sharecareapp@gmail.com";  // GMAIL username
  $mail->Password   = "openbucket13";            // GMAIL password
  $mail->AddReplyTo('jose@sharecareapp.com', 'Jose');
  $mail->AddAddress('jp.ramirezpra@gmail.com', 'Jose Pablo Ramirez Pradilla');
  $mail->SetFrom('noreply@sharecareapp.com', 'ShareCare');
//  $mail->AddReplyTo('name@yourdomain.com', 'First Last');
  $mail->Subject = 'I hope this works';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('contents.html'));

  $mail->Send();
  echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
    
       ?> 