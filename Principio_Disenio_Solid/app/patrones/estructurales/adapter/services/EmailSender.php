<?php

namespace App\patrones\estructurales\adapter\services;

class EmailSender {

    public function sendEmail(string $message): void {
        echo "Enviando correo: $message <br>";
    }

}