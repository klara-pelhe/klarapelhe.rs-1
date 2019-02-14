<?php

    if(isset($_POST['submit'])) {
        iconv_set_encoding("internal_encoding", "UTF-8");

        $name = $_POST['name'];
        $email = $_POST['email'];

        $mailTo = 'info@klarapelhe.rs';
        $subject = 'Novu poruku salje ' . $name;
        $message = $_POST['message'];
        $headers = "Poruku vam salje " . $name . " sa sledece email adrese: " . $email;

        mail(utf8_decode($mailTo), utf8_decode($subject), utf8_decode($message), $headers);
        header('Location: ./index.html'); 
    }

?>