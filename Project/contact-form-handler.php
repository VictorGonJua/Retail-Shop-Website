<?php
    $name = $_POST['nombre'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['tema'];
    $message = $_POST['mensaje'];


    $email_from = 'victor.gonjua@gmail.com';

    $email_subject = "Nuevo Mensaje Recibido";
    
    $email_body =   "Usuario: $name.\n".
                    "Usuario Email: $visitor_email.\n".
                    "Tema: $subject.\n".
                    "Mensaje: $message.\n";


    $to = "victor.gonjua@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>