<?php

namespace App\patrones\estructurales\adapter\services;

class SMSSender {

    public function sendSMS(string $message): void {
        echo "Enviando SMS: $message <br>";
    }

}