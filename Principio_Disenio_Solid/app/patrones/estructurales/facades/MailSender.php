<?php

namespace App\patrones\estructurales\facades;

class MailSender {

    public function send(SMTPConnection $smtp, MessageBuilder $messagebuilder): void {
        echo "Usando conexión: " . $smtp->getConnection() . "<br>";
        echo "Enviando mensaje: " . $messagebuilder->getContent() . "<br>"; 
    }

}