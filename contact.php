<?php
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "benjamintestaferrig@gmial.com";
    $asunto = "New contact message from $name";

    $message = "
        Sender's name: ".$name."
        Email: ".$email."
        Message: ".$message."
    ";

    mail($para, $asunto, utf8_decode($message));

    header("location: index.html");