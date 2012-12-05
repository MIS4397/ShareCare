<?php

       require_once "/usr/local/cpanel/3rdparty/lib/php/Mail/Mail.php";

        $from = "<noreply@sharecareapp.com>";
        $to = "<asg102@gmail.com>";
        $subject = "Hi!";
        $body = "Hi,\n\nHow are you?";

        $host = "ssl://mail.hostnac.com";
        $port = "465";
        $username = "noreply@sharecareapp.com";  //<> give errors
        $password = "openbucket13";

        $headers = array ('From' => $from,
          'To' => $to,
          'Subject' => $subject);
        $smtp = Mail::factory('smtp',
          array ('host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
          echo("<p>" . $mail->getMessage() . "</p>");
         } else {
          echo("<p>Message successfully sent!</p>");
         }

    ?>  <!-- end of php tag-->