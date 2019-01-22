<?php

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $subject = 'Mail from website';
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = 'klarapelhe@outlook.com';
        $header = 'Mail from '. $email;
        $txt = 'You have received an email from '. $name;
        
        mail($mailTo, $subject, $txt, $header);
    }

?>