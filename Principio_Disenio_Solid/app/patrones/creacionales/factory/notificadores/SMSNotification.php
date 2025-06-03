<?php

namespace App\patrones\creacionales\factory\notificadores;

use App\patrones\creacionales\factory\interfaces\NotificationInterface;

class SMSNotification implements NotificationInterface{
    
    public function sendNotification(string $message): void {
        // Aquí va la lógica para enviar un sms
        echo "Enviando SMS: " . $message . '<br>';
    }


}