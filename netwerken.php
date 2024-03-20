<?php
    $subject = "Hello World";
    $message = "Dit is het eerste mail bericht via PHP";
    $email = "jan@jansen.nl" ;

    $to = 'net24dhendriksen@net24dhendriksen.gc-webhosting.nl';

    $headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    if(mail($to, $subject, $message, $headers)){
        echo '<p class="success">Your message has been sent successfully!</p>';
    } else{
        echo '<p class="error">Unable to send email. Please try again!</p>';
    }
?>