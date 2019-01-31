<?php

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];

        $mailTo = 'info@klarapelhe.rs';
        $subject = 'Novu poruku salje ' . $name;
        $message = $_POST['message'];
        $headers = "Poruku vam salje " . $name . " sa sledece email adrese: " . $email;

        mail($mailTo, $subject, $message, $headers);
        header('Location: ./index.html'); 
    }

?>